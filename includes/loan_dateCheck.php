<?php
    include "auth/connection.php";

    $api = $_GET['token'];
    
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
                $sql = "SELECT date_created FROM members WHERE compid = '$e'";
                $query = mysqli_query($conn, $sql);

                $data = mysqli_fetch_assoc($query);
                $a = $data['date_created'];
                $dateToday = date('Y-m-d');

                $date1=date_create($dateToday);
                $date2=date_create($a);
                $diff=date_diff($date1,$date2);
                $year = $diff->format("%y");    
                $month = $diff->format("%m");    
                $info = array(
                    'year'=>$year,
                    'month'=>$month
                );
            }
        }
        else{
            echo "Information Failed!";
        }

        echo json_encode($info);
    
?>