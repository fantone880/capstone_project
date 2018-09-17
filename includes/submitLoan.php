<?php

include "auth/connection.php";

$api = $_GET['token'];
$loantype = $_GET['loanType'];
$amountloan = $_GET['amountLoan'];
$dateloan = $_GET['dateLoan'];
$monthlyinstallment = $_GET['monthly_installment'];
$compid = $_GET['cmakers'];
$amount = $_GET['amount'];


$loanid = 12345;

$sql = "INSERT INTO comakers (loan_id, company_id, loan_type, amount) VALUES ";

$it = new ArrayIterator( $compid );


$cit = new CachingIterator( $it );



    foreach( $cit as $index => $value ){

        $sql .= "('$loanid', '$value', '$loantype', '".$amount[$index]."')";

        if($cit->hasNext()){
            $sql .= ", ";
        }
    }

    $query = mysqli_query($conn, $sql);


    echo json_encode($query);
?>