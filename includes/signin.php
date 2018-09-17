<?php
    session_start();
    require "auth/connection.php";

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $passw = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM members where email='$email' AND passw='$passw' LIMIT 1";

    $query = mysqli_query($conn, $sql);

    if(mysqli_num_rows($query) > 0){
        
        $data = mysqli_fetch_assoc($query);
        $compid = $data['compid'];
        $_SESSION['id'] = $compid;
        define('SECRET_KEY', 'c@pst0nE');
        $header = [
            'typ'=>'JWT',
            'alg'=>'HS256'
        ];
        $header = json_encode($header);
        $header = base64_encode($header);

        $payload = [
                'validate'=>"v@lidati0n",
                'compid'=>"$compid",
                'email'=>"$email",
                'passw'=>"$passw"
        ];
        $payload = json_encode($payload);
        $payload = base64_encode($payload);
        
        $signature = hash_hmac('SHA256', $header.$payload, SECRET_KEY, true);
        $signature = base64_encode($signature);

        $token = "$header.$payload.$signature";
        $info[] = array(
            "api_key"=>"$token"
        );

        echo json_encode($info);
    }

    // else{
    //     $_SESSION['err_msg'] = "Login Failed, User not found!";
    //     // header('Location: ../index.php');
    //     $a =  "failed";
    // }

    
?>