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
    
    <!-- <link href="../css/mdb.min.css" rel="stylesheet"> -->
    <link href="../css/mdb.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/sb-admin.css" rel="stylesheet">
    <link href="../css/all.min.css" rel="stylesheet">
    <link href="../css/addons/datatables.min.css">
    <style>
        .img-container{
            height: 150px;
            border: 1px #afafaf solid;
            border-radius: 3px;
            min-width: 148px;
            max-width: 150px;
            /* margin: auto; */ /*Use this to center div*/
        }
        .page-wrapper{
           background-color: #f2f2f2;
        }
    </style>
</head>

<body onload="body()">
    <nav class="navbar navbar-expand navbar-light static-top">
        <div class="container">
            <a class="navbar-brand mr-1" href="#">Eastern Telecom Credit Cooperative   </a>

            <!-- Navbar Search -->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

            </form>

            <!-- Navbar -->
            <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i>
                <span id="nss"></span>
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
        <div class="mt-5">
            <div class="row">
                <!-- First Column -->
                <div class="col-xl-4 col-lg-4">
                    <div class="img-container"></div>
                    <div class="page-header">
                        <h4 class="mt-4" id="fullname"></h4> 
                    </div>
                    <p>Email: <span id="email"></span></p>
                    <p>Contact: <span id="contact"></span></p>
                    <p><b>Total Pledge: </b>₱ <span id="total_pledge"></span>.00</p>
                    <p><b>Monthly Pledge: </b>₱ </b> <span id="mon_pledge"></span>.00</p>
                    <p><b>Savings: </b>₱ 0.00</p>
                </div>
                <!-- Second Column -->
                <div class="col-xl-8 col-lg-8">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs md-tabs nav-justified">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">Transaction</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Loan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panel3" role="tab">Co-maker</a>
                        </li>
                    </ul>
                    <!-- Tab panels -->
                    <div class="tab-content card">
                        <!--Panel 1-->
                        <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
                            <br>
                            <table id="dtBasicExample1" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="th-sm">Date
                                            <i class="fa fa-sort float-right" aria-hidden="true"></i>
                                        </th>
                                        <th class="th-sm">Description
                                            <i class="fa fa-sort float-right" aria-hidden="true"></i>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    </tr>
                                    <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    </tr>
                                    <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    </tr>
                                    <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    </tr>
                                    <tr>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    </tr>
                                    <tr>
                                    <td>Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    </tr>
                                    <tr>
                                    <td>Herrod Chandler</td>
                                    <td>Sales Assistant</td>
                                    </tr>
                                    <tr>
                                    <td>Rhona Davidson</td>
                                    <td>Integration Specialist</td>
                                    </tr>
                                    <tr>
                                    <td>Colleen Hurst</td>
                                    <td>Javascript Developer</td>
                                    </tr>
                                    <tr>
                                    <td>Sonya Frost</td>
                                    <td>Software Engineer</td>
                                    </tr>
                                    <tr>
                                    <td>Jena Gaines</td>
                                    <td>Office Manager</td>
                                    </tr>
                                    <tr>
                                    <td>Quinn Flynn</td>
                                    <td>Support Lead</td>
                                    </tr>
                                    <tr>
                                    <td>Charde Marshall</td>
                                    <td>Regional Director</td>
                                    </tr>
                                    <tr>
                                    <td>Haley Kennedy</td>
                                    <td>Senior Marketing Designer</td>
                                    </tr>
                                    <tr>
                                    <td>Tatyana Fitzpatrick</td>
                                    <td>Regional Director</td>
                                    </tr>
                                    <tr>
                                    <td>Michael Silva</td>
                                    <td>Marketing Designer</td>
                                    </tr>
                                    <tr>
                                    <td>Paul Byrd</td>
                                    <td>Chief Financial Officer (CFO)</td>
                                    </tr>
                                    <tr>
                                    <td>Gloria Little</td>
                                    <td>Systems Administrator</td>
                                    </tr>
                                    <tr>
                                    <td>Bradley Greer</td>
                                    <td>Software Engineer</td>
                                    </tr>
                                    <tr>
                                    <td>Dai Rios</td>
                                    <td>Personnel Lead</td>
                                    </tr>
                                    <tr>
                                    <td>Jenette Caldwell</td>
                                    <td>Development Lead</td>
                                    </tr>
                                    <tr>
                                    <td>Yuri Berry</td>
                                    <td>Chief Marketing Officer (CMO)</td>
                                    </tr>
                                    <tr>
                                    <td>Caesar Vance</td>
                                    <td>Pre-Sales Support</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!--/.Panel 1-->
                        <!--Panel 2-->
                        <div class="tab-pane fade" id="panel2" role="tabpanel">
                        <br>
                            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                    <th class="th-sm">Type of Loan
                                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                                    </th>
                                    <th class="th-sm">Amount    
                                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                                    </th>
                                    <th class="th-sm">Date Approved
                                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                                    </th>
                                    <th class="th-sm">Balance
                                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                                    </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    </tr>
                                    <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    </tr>
                                    <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    </tr>
                                    <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    </tr>
                                    <tr>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    </tr>
                                    <tr>
                                    <td>Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    </tr>
                                    <tr>
                                    <td>Herrod Chandler</td>
                                    <td>Sales Assistant</td>
                                    <td>San Francisco</td>
                                    <td>59</td>
                                    </tr>
                                    <tr>
                                    <td>Rhona Davidson</td>
                                    <td>Integration Specialist</td>
                                    <td>Tokyo</td>
                                    <td>55</td>
                                    </tr>
                                    <tr>
                                    <td>Colleen Hurst</td>
                                    <td>Javascript Developer</td>
                                    <td>San Francisco</td>
                                    <td>39</td>
                                    </tr>
                                    <tr>
                                    <td>Sonya Frost</td>
                                    <td>Software Engineer</td>
                                    <td>Edinburgh</td>
                                    <td>23</td>
                                    </tr>
                                    <tr>
                                    <td>Jena Gaines</td>
                                    <td>Office Manager</td>
                                    <td>London</td>
                                    <td>30</td>
                                    </tr>
                                    <tr>
                                    <td>Quinn Flynn</td>
                                    <td>Support Lead</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    </tr>
                                    <tr>
                                    <td>Charde Marshall</td>
                                    <td>Regional Director</td>
                                    <td>San Francisco</td>
                                    <td>36</td>
                                    </tr>
                                    <tr>
                                    <td>Haley Kennedy</td>
                                    <td>Senior Marketing Designer</td>
                                    <td>London</td>
                                    <td>43</td>
                                    </tr>
                                    <tr>
                                    <td>Tatyana Fitzpatrick</td>
                                    <td>Regional Director</td>
                                    <td>London</td>
                                    <td>19</td>
                                    </tr>
                                    <tr>
                                    <td>Michael Silva</td>
                                    <td>Marketing Designer</td>
                                    <td>London</td>
                                    <td>66</td>
                                    </tr>
                                    <tr>
                                    <td>Paul Byrd</td>
                                    <td>Chief Financial Officer (CFO)</td>
                                    <td>New York</td>
                                    <td>64</td>
                                    </tr>
                                    <tr>
                                    <td>Gloria Little</td>
                                    <td>Systems Administrator</td>
                                    <td>New York</td>
                                    <td>59</td>
                                    </tr>
                                    <tr>
                                    <td>Bradley Greer</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>41</td>
                                    </tr>
                                    <tr>
                                    <td>Dai Rios</td>
                                    <td>Personnel Lead</td>
                                    <td>Edinburgh</td>
                                    <td>35</td>
                                    </tr>
                                    <tr>
                                    <td>Jenette Caldwell</td>
                                    <td>Development Lead</td>
                                    <td>New York</td>
                                    <td>30</td>
                                    </tr>
                                    <tr>
                                    <td>Yuri Berry</td>
                                    <td>Chief Marketing Officer (CMO)</td>
                                    <td>New York</td>
                                    <td>40</td>
                                    </tr>
                                    <tr>
                                    <td>Caesar Vance</td>
                                    <td>Pre-Sales Support</td>
                                    <td>New York</td>
                                    <td>21</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!--/.Panel 2-->
                        <!--Panel 3-->
                        <div class="tab-pane fade" id="panel3" role="tabpanel">
                        <br>
                            <table id="dtBasicExample2" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                    <th class="th-sm">Type of Loan
                                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                                    </th>
                                    <th class="th-sm">Amount    
                                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                                    </th>
                                    <th class="th-sm">Date Approved
                                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                                    </th>
                                    <th class="th-sm">Balance
                                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                                    </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    </tr>
                                    <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    </tr>
                                    <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    </tr>
                                    <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    </tr>
                                    <tr>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    </tr>
                                    <tr>
                                    <td>Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    </tr>
                                    <tr>
                                    <td>Herrod Chandler</td>
                                    <td>Sales Assistant</td>
                                    <td>San Francisco</td>
                                    <td>59</td>
                                    </tr>
                                    <tr>
                                    <td>Rhona Davidson</td>
                                    <td>Integration Specialist</td>
                                    <td>Tokyo</td>
                                    <td>55</td>
                                    </tr>
                                    <tr>
                                    <td>Colleen Hurst</td>
                                    <td>Javascript Developer</td>
                                    <td>San Francisco</td>
                                    <td>39</td>
                                    </tr>
                                    <tr>
                                    <td>Sonya Frost</td>
                                    <td>Software Engineer</td>
                                    <td>Edinburgh</td>
                                    <td>23</td>
                                    </tr>
                                    <tr>
                                    <td>Jena Gaines</td>
                                    <td>Office Manager</td>
                                    <td>London</td>
                                    <td>30</td>
                                    </tr>
                                    <tr>
                                    <td>Quinn Flynn</td>
                                    <td>Support Lead</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    </tr>
                                    <tr>
                                    <td>Charde Marshall</td>
                                    <td>Regional Director</td>
                                    <td>San Francisco</td>
                                    <td>36</td>
                                    </tr>
                                    <tr>
                                    <td>Haley Kennedy</td>
                                    <td>Senior Marketing Designer</td>
                                    <td>London</td>
                                    <td>43</td>
                                    </tr>
                                    <tr>
                                    <td>Tatyana Fitzpatrick</td>
                                    <td>Regional Director</td>
                                    <td>London</td>
                                    <td>19</td>
                                    </tr>
                                    <tr>
                                    <td>Michael Silva</td>
                                    <td>Marketing Designer</td>
                                    <td>London</td>
                                    <td>66</td>
                                    </tr>
                                    <tr>
                                    <td>Paul Byrd</td>
                                    <td>Chief Financial Officer (CFO)</td>
                                    <td>New York</td>
                                    <td>64</td>
                                    </tr>
                                    <tr>
                                    <td>Gloria Little</td>
                                    <td>Systems Administrator</td>
                                    <td>New York</td>
                                    <td>59</td>
                                    </tr>
                                    <tr>
                                    <td>Bradley Greer</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>41</td>
                                    </tr>
                                    <tr>
                                    <td>Dai Rios</td>
                                    <td>Personnel Lead</td>
                                    <td>Edinburgh</td>
                                    <td>35</td>
                                    </tr>
                                    <tr>
                                    <td>Jenette Caldwell</td>
                                    <td>Development Lead</td>
                                    <td>New York</td>
                                    <td>30</td>
                                    </tr>
                                    <tr>
                                    <td>Yuri Berry</td>
                                    <td>Chief Marketing Officer (CMO)</td>
                                    <td>New York</td>
                                    <td>40</td>
                                    </tr>
                                    <tr>
                                    <td>Caesar Vance</td>
                                    <td>Pre-Sales Support</td>
                                    <td>New York</td>
                                    <td>21</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!--/.Panel 3-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

    <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <script type="text/javascript" src="../js/sb-admin.js"></script>
    <script type="text/javascript" src="../js/addons/datatables.min.js"></script>
    <script type="text/javascript" src="../js/account.js"></script>
    <script type="text/javascript" src="../js/scripts.js"></script>