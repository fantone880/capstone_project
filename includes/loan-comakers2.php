<?php

    include "auth/connection.php";

    $compids = $_GET['compids'];
    $api = $_GET['token'];
    $amountLoan = $_GET['amountLoan'];
    
    

    $z = implode(', ', $compids);

    $a = explode(".", $api);

        $decoded_header = base64_decode($a[0]);
        $decoded_header = json_decode($decoded_header); 

        $x = $decoded_header->{'typ'};
        $y = $decoded_header->{'alg'};

        if($x == 'JWT' && $y == 'HS256'){
            $decode_payload = base64_decode($a[1]);
            $decode_payload = json_decode($decode_payload);
            

            $b = $decode_payload->{'validate'};
            $e = $decode_payload->{'compid'};
            $c = $decode_payload->{'email'};
            $d = $decode_payload->{'passw'};

            if($b == "v@lidati0n"){
                
                $sql = "SELECT compid, lname, fname, mname, extname FROM members WHERE compid IN ($z)";
                $query = mysqli_query($conn, $sql);

                $arr=[];
                $cmakerAmount = 5000;
                $roundOff = $amountLoan / $cmakerAmount; // 5.2
                $ppl5k = floor($roundOff); // 5
                for($count=0; $count<$ppl5k; $count++){
                    array_push($arr, $cmakerAmount);
                }
                if(is_float($roundOff)){
                    $remain_bal = $amountLoan - (5000 * $ppl5k);
                    array_push($arr, $remain_bal);
                }
                
                while($data = mysqli_fetch_assoc($query)){
                    $info[] = $data;
                }

                $all[] = array(
                    "people"=>$info,
                    "amount"=>$arr
                );
            }
        }
        else{
            echo "Information Failed!";
        }
        echo json_encode($all);