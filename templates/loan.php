<?php
    session_start();
    if(!isset($_SESSION['id']) || (trim($_SESSION['id']) == "")){
        header('Location: ../index.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Eastern Telecom Credit Cooperative</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/mdb.min.css" rel="stylesheet">
    <link href="../css/mdb.css" rel="stylesheet">
    <link href="../css/addons/datatables.min.css"> 
    <style>
        .indentOne{
            text-indent: 4%;
        }
        .up-icon, .down-icon{
            cursor: pointer;
        }
    </style>
</head>

<body onload="body()">
    <nav class="navbar navbar-expand navbar-light static-top">
        <div class="container">
            <a class="navbar-brand mr-1" href="account.php">Eastern Telecom Credit Cooperative   </a>

            <!-- Navbar Search -->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

            </form>

            <!-- Navbar -->
            <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i>
                <span>Account</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <h6 class="dropdown-header">Services</h6>
                    <a class="dropdown-item" href="loan"><i class="fas fa-hand-holding-usd"></i>  Loan</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-piggy-bank"></i>  Savings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="fas fa-key"></i>  Change Password</a>
                    <a class="dropdown-item" id="logout"><i class="fas fa-sign-out-alt"></i>  Logout</a>
                    </div>
                </div>
            </li>
            </ul>
        </div>
    </nav>
    


    <div class="container">

        <div class="mt-3">

            <div class="card">
                <div class="card-header info-color white-text d-flex justify-content-between">
                    Loan Application
                    <i class="fas fa-chevron-up up-icon" id="up-arr"></i>
                    <i class="fas fa-chevron-down down-icon" id="down-arr" hidden></i>
                </div>
                <div class="card-body reminder">
                    <h4 class="card-title"><i>Few Reminders:</i></h4>
                    <p class="card-text text-justify">* Maximum loanable amount: (1) Regular loan - twice the paid-up capital; &nbsp (2) MPL: ₱30,000.00; &nbsp (3) Educ. Loan: ₱20,000.00</p>
                    <p class="card-text text-justify">* Maximum terms: (1) Regular loan - 24mos.; &nbsp (2) MPL - 24mos.; &nbsp (3) Educ Loan - 12mos.</p>
                    <p class="card-text text-justify">* One co-maker for every P5,000.00</p>
                    <p class="card-text text-justify">* ETCC BOD & Committee members are NOT allowed as co-makers</p>
                    <p class="card-text text-justify">* Eligibility for renewal: </p>
                    <div class="indentOne">
                        <p class="card-text text-justify">Remaining loan balance shall not be more than 3 months amortization at the time of loan renewal. The unpaid loan balance shall be offset from the proceeds of the new loan. </p>
                    </div>
                    <div class="indentOne">
                    <p class="card-text text-justify">In case the unpaid loan balance is more than 3 months amortization, the borrower shall pay in cash the amount due in excess of the 3 months loan balance.
                    </p>
                    </div>
                </div>
            </div>
            <form id="form">
                <div class="card mt-3 mb-5">
                    <div class="card-header primary-color white-text">
                        Fill up form
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5">
                                <div class="md-form">
                                    <select class="mdb-select" id="typeLoan" name="loanType">
                                        <option value="" disabled selected>Terms of Payment (no. of months installment)</option>
                                        <option value="Regular">Regular Loan</option>
                                        <option value="Educational">Educational Loan</option>
                                        <option value="Multi-purpose">Multi-purpose Loan</option>
                                    </select>
                                </div>
                                <div class="md-form">
                                    <input type="text" id="amountLoan" class="form-control" name="amountLoan"/>
                                    <label for="form1">Amount of Principal Loan: </label>
                                </div>
                                <div class="md-form">
                                    <select class="mdb-select" id="installmentLoan" name="monthly_installment" >
                                        <option value="" disabled selected>Terms of Payment (no. of months installment)</option>
                                        <option value="6">6 months</option>
                                        <option value="12">12 months</option>
                                        <option value="18">18 months</option>
                                        <option value="24">24 months</option>
                                    </select>
                                </div>
                                <div class="md-form">
                                    <input placeholder="Selected date" type="text" id="dateLoan" class="form-control datepicker" name="dateLoan">
                                    <label for="date-picker-example">Salary Deduction Starts On:</label>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7">
                                    <button id="modalActivate" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalPreview">
                                        Choose your comakers
                                    </button>
                                <div class='table-responsive'>
                                    <!--Table-->
                                    <table id="tablePreview" class="table table-hover">
                                    <thead>
                                        <tr>
                                        <th style='width:10%;'>#</th>
                                        <th style='width:90%;'>Name</th>
                                        <th style='width:90%;'>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody id="finalComaker">
                                    </tbody>

                                    </table>
                                    <!--Table-->
                                    <div id="cc"></div>
                                    <div id="dd"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted ">
                        <!-- <button type="button" class="btn btn-primary btn-sm" id="submitLoan">Submit Loan</a> -->
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalConfirmLoan">Submit Loan</a>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade right" id="exampleModalPreview" tabindex="-1" role="dialog" aria-labelledby="exampleModalPreviewLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fluid modal-full-height modal-right" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalPreviewLabel">Choose your comakers</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table id="dtBasicExample" class="table table-bordered table-hover table-sm" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class='form-check'>
                                                <input type='checkbox' class='form-check-input' id='selectAll'>
                                                <label class='form-check-label' for='selectAll'></label>
                                            </div>
                                        </th>
                                        <th>Name</th>
                                    </tr>
                                </thead>
                                <tbody id="cmakers">
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="saveSelection">Save</button>
                        </div>
                        </div>
                    </div>
                </div>  

                <!--Modal: modalSubmitLoan-->
                <div class="modal fade" id="modalConfirmLoan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm modal-notify modal-info" role="document">
                        <!--Content-->
                        <div class="modal-content text-center">
                            <!--Header-->
                            <!-- <div class="modal-header d-flex justify-content-center">
                                <p class="heading">Confirmation</p>
                            </div> -->

                            <!--Body-->
                            <div class="modal-body">
                                <i class="fa fa-question fa-4x animated rotateIn"></i>
                                <h3>Are you sure?</h3>
                                <br >
                                <p>Are you sure you want to send this loan application?</p>
                            </div>

                            <!--Footer-->
                            <div class="modal-footer flex-center">
                                <button type="button" class="btn  btn-outline-info" id="submit">Yes</button>
                                <button type="button" class="btn  btn-info waves-effect" data-dismiss="modal">No</a>
                            </div>
                        </div>
                        <!--/.Content-->
                    </div>
                </div>
                <!--Modal: modalConfirmDelete-->
            </form>

            <!-- Button trigger modal-->
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCoupon">Launch modal</button> -->

            <!--Modal: modalCoupon-->
            <div class="modal fade top" id="modalCoupon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
            data-backdrop="true">
            <div class="modal-dialog modal-frame modal-top modal-notify modal-info" role="document">
                <!--Content-->
                <div class="modal-content">
                    <!--Body-->
                    <div class="modal-body">
                        <div class="row d-flex justify-content-center align-items-center">

                            <h2><span class="badge">v52gs1</span></h2>
                            <p class="pt-3 mx-4">Sorry, you're not yet qualified for this service. You must be a member of the ETCC for atleast <strong>Six(6) months</strong>.</p>

                            <!-- <a type="button" class="btn btn-success">Get it <i class="fa fa-book ml-1"></i></a> -->
                            <a type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">I understand</a>
                        </div>
                    </div>
                </div>
                <!--/.Content-->
            </div>
            </div>
            <!--Modal: modalCoupon-->
        </div>
    </div>
    

</body>
</html>

    <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.2/js/mdb.min.js"></script>
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <script type="text/javascript" src="../js/addons/datatables.min.js"></script>
    <script type="text/javascript" src="../js/loan.js"></script>
    <script type="text/javascript" src="../js/scripts.js"></script>