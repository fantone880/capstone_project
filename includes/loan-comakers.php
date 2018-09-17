<?php

    session_start();   

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
                $sql = "SELECT compid, fname, mname, lname, extname FROM members WHERE compid <>'$e' ORDER BY lname ASC, fname ASC, extname ASC, mname ASC";
                $query = mysqli_query($conn, $sql);
                while($data = mysqli_fetch_assoc($query)){
                        $info[] = $data;
                }
            }
            
        }
        else{
            echo "Information Failed!";
        }
        echo json_encode($info);
?>