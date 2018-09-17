<?php

    include "auth/connection.php";

    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $mname = mysqli_real_escape_string($conn, $_POST['mname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $extname = mysqli_real_escape_string($conn, $_POST['extname']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $pob = mysqli_real_escape_string($conn, $_POST['pob']);
    $religion = mysqli_real_escape_string($conn, $_POST['religion']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $civilstatus = mysqli_real_escape_string($conn, $_POST['civilstatus']);
    $hea = mysqli_real_escape_string($conn, $_POST['hea']);
    $street = mysqli_real_escape_string($conn, $_POST['street']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $province = mysqli_real_escape_string($conn, $_POST['province']);
    $zip = mysqli_real_escape_string($conn, $_POST['zip']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $main_num = mysqli_real_escape_string($conn, $_POST['main_num']);
    $add_num = mysqli_real_escape_string($conn, $_POST['add_num']);
    $ioe_name = mysqli_real_escape_string($conn, $_POST['ioe_name']);
    $ioe_num = mysqli_real_escape_string($conn, $_POST['ioe_num']);
    $compid = mysqli_real_escape_string($conn, $_POST['compid']);
    $tin = mysqli_real_escape_string($conn, $_POST['tin']);
    $sss = mysqli_real_escape_string($conn, $_POST['sss']);
    $idtype1 = mysqli_real_escape_string($conn, $_POST['idtype1']);
    $idtype2 = mysqli_real_escape_string($conn, $_POST['idtype2']);
    $idnum1 = mysqli_real_escape_string($conn, $_POST['idnum1']);
    $idnum2 = mysqli_real_escape_string($conn, $_POST['idnum2']);
    $idissue1 = mysqli_real_escape_string($conn, $_POST['idissue1']);
    $idissue2 = mysqli_real_escape_string($conn, $_POST['idissue2']);
    $idexpire1 = mysqli_real_escape_string($conn, $_POST['idexpire1']);
    $idexpire2 = mysqli_real_escape_string($conn, $_POST['idexpire2']);
    $d_employed = mysqli_real_escape_string($conn, $_POST['d_employed']);
    $d_accepted = mysqli_real_escape_string($conn, $_POST['d_accepted']);
    $occu = mysqli_real_escape_string($conn, $_POST['occu']);
    $dept = mysqli_real_escape_string($conn, $_POST['dept']);
    $position = mysqli_real_escape_string($conn, $_POST['position']);
    $num_dep = mysqli_real_escape_string($conn, $_POST['num_dep']);
    $pledge = mysqli_real_escape_string($conn, $_POST['pledge']);
    $mode_payment = mysqli_real_escape_string($conn, $_POST['mode_payment']);
    $mon_install = mysqli_real_escape_string($conn, $_POST['mon_install']);
    $mon_depo = mysqli_real_escape_string($conn, $_POST['mon_depo']);
    $registered = '0';

    
    $sql = "INSERT INTO members (
        compid,
        fname,
        mname,
        lname,
        extname,
        dob,
        pob,
        gender,
        civilstatus,
        religion,
        hea,
        street,
        city,
        province,
        zip,
        tin,
        sss,
        main_num,
        add_num,
        email,
        ioe_name,
        ioe_num,
        idtype1,
        idtype2,
        idnum1,
        idnum2,
        idissue1,
        idissue2,
        idexpire1,
        idexpire2,
        d_employed,
        d_accepted,
        occu,
        dept,
        position,
        num_dep,
        pledge,
        mode_payment,
        mon_install,
        mon_depo,
        registered
    ) VALUES (
        '$compid',
        '$fname',
        '$mname',
        '$lname',
        '$extname',
        '$dob',
        '$pob',
        '$gender',
        '$civilstatus',
        '$religion',
        '$hea',
        '$street',
        '$city',
        '$province',
        '$zip',
        '$tin',
        '$sss',
        '$main_num',
        '$add_num',
        '$email',
        '$ioe_name',
        '$ioe_num',
        '$idtype1',
        '$idtype2',
        '$idnum1',
        '$idnum2',
        '$idissue1',
        '$idissue2',
        '$idexpire1',
        '$idexpire2',
        '$d_employed',
        '$d_accepted',
        '$occu',
        '$dept',
        '$position',
        '$num_dep',
        '$pledge',
        '$mode_payment',
        '$mon_install',
        '$mon_depo',
        '$registered'
    )";

    $query = mysqli_query($conn, $sql);

    if($query){
        echo "success";
    }
    else{
        echo "fail";
    }
?>