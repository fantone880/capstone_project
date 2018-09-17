<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Eastern Telecom Credit Cooperative</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="../css/mdb.min.css" rel="stylesheet"> -->
    <link href="../css/mdb.css" rel="stylesheet">
    <style>
        .cent{
            text-align: center;
        }
        .steps-form-2 {
            display: table;
            width: 100%;
            position: relative; }
        .steps-form-2 .steps-row-2 {
            display: table-row; }
        .steps-form-2 .steps-row-2:before {
            top: 14px;
            bottom: 0;
            position: absolute;
            content: " ";
            width: 100%;
            height: 2px;
            background-color: #007E33; }
        .steps-form-2 .steps-row-2 .steps-step-2 {
            display: table-cell;
            text-align: center;
            position: relative; }
        .steps-form-2 .steps-row-2 .steps-step-2 p {
            margin-top: 0.5rem; }
        .steps-form-2 .steps-row-2 .steps-step-2 button[disabled] {
            opacity: 1 !important;
            filter: alpha(opacity=100) !important; }
        .steps-form-2 .steps-row-2 .steps-step-2 .btn-circle-2 {
            width: 70px;
            height: 70px;
            border: 2px solid #007E33;
            background-color: white !important;
            color: #007E33 !important;
            border-radius: 50%;
            padding: 22px 18px 15px 18px;
            margin-top: -22px; }
        .steps-form-2 .steps-row-2 .steps-step-2 .btn-circle-2:hover {
            border: 2px solid #00C851;
            color: #00C851 !important;
            background-color: white !important; }
        .steps-form-2 .steps-row-2 .steps-step-2 .btn-circle-2 .fa {
            font-size: 1.7rem; }  

    </style>
</head>
<body>
    <nav class="navbar navbar-expand navbar-light static-top">
        <div class="container">
            <a class="navbar-brand mr-1" href="../index">Eastern Telecom Credit Cooperative   </a>

            <!-- Navbar Search -->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

            </form>

            <!-- Navbar -->
            <ul class="navbar-nav ml-auto ml-md-0">
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="mt-3">
            <h2 class="text-center font-bold pt-4 pb-5 mb-5"><strong>Registration Form</strong></h2>

            <!-- Stepper -->
            <div class="steps-form-2">
                <div class="steps-row-2 setup-panel-2 d-flex justify-content-between">
                    <div class="steps-step-2">
                        <a href="#step-1" type="button" class="btn btn-amber btn-circle-2 waves-effect ml-0" data-toggle="tooltip" data-placement="top" title="Personal Data"><i class="fa fa-user" aria-hidden="true"></i></a>
                    </div>
                    <div class="steps-step-2">
                        <a href="#step-2" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top" title="Background Information"><i class="fa fa-file" aria-hidden="true"></i></a>
                    </div>
                    <div class="steps-step-2">
                        <a href="#step-3" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top" title="Employment Data"><i class="fa fa-briefcase" aria-hidden="true"></i></a>
                    </div>
                    <div class="steps-step-2">
                        <a href="#step-4" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect mr-0" data-toggle="tooltip" data-placement="top" title="Pledge"><i class="fa fa-handshake" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <!-- First Step -->
            <form role="form" id="form">

                <div class="row setup-content-2" id="step-1">
                    <div class="col-md-12">
                        <h3 class="font-weight-bold pl-0 mt-4"><strong>Personal Data</strong></h3>
                        <div class="form-row">
                            <div class="col">
                                <!-- First name -->
                                <div class="md-form">
                                    <input type="text" id="materialRegisterFormFirstName" class="form-control validate" required="required" data-error="wrong" data-success="right" name="fname">
                                    <label for="materialRegisterFormFirstName">First name <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col">
                                <!-- Middle name -->
                                <div class="md-form">
                                    <input type="text" id="materialRegisterFormMiddleName" class="form-control validate" required="required" data-error="wrong" data-success="right" name="mname">
                                    <label for="materialRegisterFormMiddleName">Middle name</label>
                                </div>
                            </div>
                            <div class="col">
                                <!-- Last name -->
                                <div class="md-form">
                                    <input type="text" id="materialRegisterFormLastName" class="form-control validate" required="required" data-error="wrong" data-success="right" name="lname">
                                    <label for="materialRegisterFormLastName">Last name <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col">
                                <!-- EXT name -->
                                <div class="md-form">
                                    <input type="text" id="materialRegisterFormFirstName" class="form-control validate" data-error="wrong" data-success="right"name="extname">
                                    <label for="materialRegisterFormFirstName">Ext name (Jr, II, III)</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row mt-3">
                            <div class="col">
                                <div class="md-form">
                                    <input placeholder="Select Date" type="text" id="date-picker-example" class="form-control datepicker" required="required" data-error="wrong" data-success="right" name="dob">
                                    <label for="date-picker-example">Date of birth <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form">
                                    <input type="text" id="materialRegisterFormMiddleName" class="form-control validate" required="required" name="pob">
                                    <label for="materialRegisterFormMiddleName">Place of birth <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form">
                                    <input type="text" id="materialRegisterFormReligion" class="form-control validate" required="required" data-error="wrong" data-success="right" name="religion">
                                    <label for="materialRegisterFormReligion">Religion <span class="text-danger">*</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row mt-3">
                            <div class="col">
                                <div class="md-form">
                                    <select class="mdb-select" required="required" data-error="wrong" data-success="right" name="gender">
                                        <option value="" disabled selected>---Please select---</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                    </select>
                                    <label>Gender <span class="text-danger">*</span></label>
                                    
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form">
                                    <select class="mdb-select" required="required" data-error="wrong" data-success="right" name="civilstatus">
                                        <option value="" disabled selected>---Please select---</option>
                                        <option value="1">Single</option>
                                        <option value="2">Married</option>
                                        <option value="3">Separated</option>
                                        <option value="4">Divorced</option>
                                        <option value="5">Widowed</option>
                                    </select>
                                    <label>Civil Status <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form">
                                    <select class="mdb-select" required="required" data-error="wrong" data-success="right" name="hea">
                                        <option value="" disabled selected>---Please select---</option>
                                        <option value="1">High School Graduate</option>
                                        <option value="2">Associate's Degree</option>
                                        <option value="3">Bachelor's Degree</option>
                                        <option value="4">Master's Degree</option>
                                    </select>
                                    <label>Highest Educational Attainment <span class="text-danger">*</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row mt-3">
                            <div class="col">
                                <div class="md-form">
                                    <input type="text" id="materialRegisterFormReligion" class="form-control validate" required="required" data-error="wrong" data-success="right" name="street">
                                    <label for="materialRegisterFormStreet">Street <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form">
                                    <input type="text" id="materialRegisterFormReligion" class="form-control validate" required="required" data-error="wrong" data-success="right" name="city">
                                    <label for="materialRegisterFormStreet">City <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form">
                                    <input type="text" id="materialRegisterFormReligion" class="form-control validate" required="required" data-error="wrong" data-success="right" name="province">
                                    <label for="materialRegisterFormStreet">State / Province <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form">
                                    <input type="text" id="materialRegisterFormReligion" class="form-control validate" required="required" data-error="wrong" data-success="right" name="zip">
                                    <label for="materialRegisterFormStreet">ZIP Code <span class="text-danger">*</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row mt-3">
                            <div class="col">
                                <div class="md-form">
                                    <input type="email" id="materialRegisterFormReligion" class="form-control validate" required="required" data-error="wrong" data-success="right" name="email">
                                    <label for="materialRegisterFormStreet">Email Address <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form">
                                    <input type="text" id="materialRegisterFormReligion" class="form-control validate" required="required" data-error="wrong" data-success="right" name="main_num">
                                    <label for="materialRegisterFormStreet">Main Contact Number <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form">
                                    <input type="text" id="materialRegisterFormAdditionaNumber" class="form-control validate" data-error="wrong" data-success="right" name="add_num">
                                    <label for="materialRegisterFormStreet">Additional Contact Number</label>
                                </div>
                            </div>
                        </div>
                        <h3 class="font-weight-bold pl-0 mt-4"><strong>Emergency Contact Information</strong></h3>

                        <div class="form-row mt-3">
                            <div class="col">
                                <!-- Middle name -->
                                <div class="md-form">
                                    <input type="text" id="materialRegisterFormMiddleName" class="form-control validate" required="required" data-error="wrong" data-success="right" name="ioe_name">
                                    <label for="materialRegisterFormMiddleName">Name <span class="text-danger">*</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row mt-3">
                            <div class="col">
                                <!-- Middle name -->
                                <div class="md-form">
                                    <input type="text" id="materialRegisterFormMiddleName" class="form-control validate" required="required" data-error="wrong" data-success="right" name="ioe_num">
                                    <label for="materialRegisterFormMiddleName">Contact Number <span class="text-danger">*</span></label>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right mt-3" type="button">Next</button>
                    </div>
                </div>

                <!-- Second Step -->
                <div class="row setup-content-2" id="step-2">
                    <div class="col-md-12">
                        <h3 class="font-weight-bold pl-0 my-4"><strong>Background Information</strong></h3>
                        <div class="form-row">
                            <div class="col">
                                <div class="md-form">
                                    <label for="yourName-2" data-error="wrong" data-success="right">Company ID <span class="text-danger">*</span></label>
                                    <input id="yourName-2" type="text" required="required" class="form-control validate" name="compid">
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form">
                                    <label for="yourName-2" data-error="wrong" data-success="right">TIN <span class="text-danger">*</span></label>
                                    <input id="yourName-2" type="text" required="required" class="form-control validate" name="tin">
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form">
                                    <label for="yourName-2" data-error="wrong" data-success="right">SSS <span class="text-danger">*</span></label>
                                    <input id="yourName-2" type="text" required="required" class="form-control validate" name="sss">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="md-form">
                                    <label for="yourName-2" data-error="wrong" data-success="right">ID Type <span class="text-danger">*</span></label>
                                    <input id="yourName-2" type="text" required="required" class="form-control validate" name="idtype1">
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form">
                                    <label for="yourName-2" data-error="wrong" data-success="right">ID Number <span class="text-danger">*</span></label>
                                    <input id="yourName-2" type="text" required="required" class="form-control validate" name="idnum1">
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form">
                                    <input placeholder="Select Date" type="text" id="date-picker-example" class="form-control validate datepicker" required="required" data-error="wrong" data-success="right" name="idissue1">
                                    <label for="date-picker-example">ID Issue Date <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form">
                                    <input placeholder="Select Date" type="text" id="date-picker-example" class="form-control validate datepicker" required="required" data-error="wrong" data-success="right" name="idexpire1">
                                    <label for="date-picker-example">ID Expiry Date <span class="text-danger">*</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="md-form">
                                    <label for="yourName-2" data-error="wrong" data-success="right">ID Type <span class="text-danger">*</span></label>
                                    <input id="yourName-2" type="text" required="required" class="form-control validate" name="idtype2">
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form">
                                    <label for="yourName-2" data-error="wrong" data-success="right">ID Number <span class="text-danger">*</span></label>
                                    <input id="yourName-2" type="text" required="required" class="form-control validate" name="idnum2">
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form">
                                    <input placeholder="Select Date" type="text" id="date-picker-example" class="form-control validate datepicker" required="required" data-error="wrong" data-success="right" name="idissue2">
                                    <label for="date-picker-example">ID Issue Date <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form">
                                    <input placeholder="Select Date" type="text" id="date-picker-example" class="form-control validate datepicker" required="required" data-error="wrong" data-success="right" name="idexpire2">
                                    <label for="date-picker-example">ID Expiry Date <span class="text-danger">*</span></label>
                                </div>
                            </div>
                        </div>
                            <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Previous</button>
                            <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Next</button>
                        </div>
                </div>

                <!-- Third Step -->
                <div class="row setup-content-2" id="step-3">
                    <div class="col-md-12">
                        <h3 class="font-weight-bold pl-0 my-4"><strong>Employement Data</strong></h3>
                        <div class="form-row">
                            <div class="col">
                                <div class="md-form">
                                    <input placeholder="Select Date" type="text" id="date-picker-example" class="form-control validate datepicker" required="required" data-error="wrong" data-success="right" name="d_employed">
                                    <label for="date-picker-example">Date Employed <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form">
                                    <input placeholder="Select Date" type="text" id="date-picker-example" class="form-control validate datepicker" required="required" data-error="wrong" data-success="right" name="d_accepted">
                                    <label for="date-picker-example">Date Accepted <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form">
                                    <label for="yourName-2" data-error="wrong" data-success="right">Occupation / Income Source <span class="text-danger">*</span></label>
                                    <input id="yourName-2" type="text" required="required" class="form-control validate" name="occu">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="md-form">
                                    <label for="yourName-2" data-error="wrong" data-success="right">Department / Section <span class="text-danger">*</span></label>
                                    <input id="yourName-2" type="text" required="required" class="form-control validate" name="dept">
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form">
                                    <label for="yourName-2" data-error="wrong" data-success="right">Position <span class="text-danger">*</span></label>
                                    <input id="yourName-2" type="text" required="required" class="form-control validate" name="position">
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form">
                                    <label for="yourName-2" data-error="wrong" data-success="right">Number of Dependents <span class="text-danger">*</span></label>
                                    <input id="yourName-2" type="text" required="required" class="form-control validate" name="num_dep">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Previous</button>
                        <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Next</button>
                    </div>
                </div>

                <!-- Fourth Step -->
                <div class="row setup-content-2" id="step-4">
                    <div class="col-md-12">
                        <h3 class="font-weight-bold pl-0 my-4"><strong>Pledge</strong></h3>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="md-form">
                                    <label for="yourName-2" data-error="wrong" data-success="right">Total Pledge</label>
                                    <input type="text" required="required" class="form-control validate" id="pledge1" name="pledge">
                                </div>
                                <div class="md-form">
                                    <select class="validate mdb-select" required="required" data-error="wrong" data-success="right" id="mode_payment1" name="mode_payment">
                                        <option value="" disabled selected>Mode of Payment</option>
                                        <option value="Cash">Cash</option>
                                        <option value="Installment">Installment</option>
                                    </select>
                                </div>
                                <div class="md-form">
                                    <label for="yourName-2" data-error="wrong" data-success="right">Monthly Installment</label>
                                    <input type="text" required="required" class="form-control validate" id="monthly_install1" name="mon_install">
                                </div>
                                <div class="md-form">
                                    <label for="yourName-2" data-error="wrong" data-success="right">Monthly Deposit</label>
                                    <input type="text" required="required" class="form-control validate" id="monthly_depo1" name="mon_depo">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div>
                                    <div class="d-inline ml-5">I hereby pledge </div>
                                    <div class="d-inline"><input type="text" id="pledge2" class="cent"></div>
                                    <div class="d-inline">as my deposit payable in:</div>
                                </div>
                                <div class="mt-4">
                                    <div class="d-inline">
                                        <input id="mode_payment2" type="text" class="cent">
                                    </div>
                                    <div class="d-inline"> montly installment of </div>
                                    <div class="d-inline"> <input id="monthly_install2" type="text"class="cent"></div>
                                    <div class="d-inline"> and further to make a</div>
                                </div>
                                <div class="mt-3">
                                    <div class="d-inline">monthly deposit to my pledge in the sum of </div>
                                    <div class="d-inline"><input  id="monthly_depo2" type="text" class="cent"></div>
                                    <div class="d-inline"><b> I fully understand that my</b></div>
                                </div>
                                <div class="mt-3">
                                    <div class="d-inline"><b> pledge shall not be withrawn during my membership.</b></div>
                                </div>
                                <div class="mt-5">
                                    <div class="d-inline ml-5">I also hereby authorize the <b>ETCCI Accountant</b> to collect from <b>Eastern Telecommunication </b></div>
                                    <div class="d-inline"><b>Philippines Inc. </b>out of my salary the sum indicated above. I also agree to settle with the <b>ETCCI Accountant</b> the required membership fee of ₱100.00</div>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Previous</button>
                        <button class="btn btn-success btn-rounded float-right" type="submit" id='submit' name="submit">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

    

    <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.2/js/mdb.min.js"></script>
    <script type="text/javascript" src="../js/mdb.min.js"></script>
</body>
</html>
    <script>
        // Tooltips Initialization
        $(function () {
        $('[data-toggle="tooltip"]').tooltip()
        })

        // Steppers
        $(document).ready(function () {
        var navListItems = $('div.setup-panel-2 div a'),
                allWells = $('.setup-content-2'),
                allNextBtn = $('.nextBtn-2'),
                allPrevBtn = $('.prevBtn-2');

        allWells.hide();

        navListItems.click(function (e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                    $item = $(this);

            if (!$item.hasClass('disabled')) {
                navListItems.removeClass('btn-amber').addClass('btn-blue-grey');
                $item.addClass('btn-amber');
                allWells.hide();
                $target.show();
                $target.find('input:eq(0)').focus();
            }
        });

        allPrevBtn.click(function(){
            var curStep = $(this).closest(".setup-content-2"),
                curStepBtn = curStep.attr("id"),
                prevStepSteps = $('div.setup-panel-2 div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

                prevStepSteps.removeAttr('disabled').trigger('click');
        });

        allNextBtn.click(function(){
            var curStep = $(this).closest(".setup-content-2"),
                curStepBtn = curStep.attr("id"),
                nextStepSteps = $('div.setup-panel-2 div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                curInputs = curStep.find("input[type='text'],input[type='url']"),
                isValid = true;

            $(".form-group").removeClass("has-error");
            for(var i=0; i< curInputs.length; i++){
                if (!curInputs[i].validity.valid){
                    isValid = false;
                    $(curInputs[i]).closest(".form-group").addClass("has-error");
                }
            }

            if (isValid)
                nextStepSteps.removeAttr('disabled').trigger('click');
        });

        $('div.setup-panel-2 div a.btn-amber').trigger('click');
        });
    </script>
    <script>
        $(document).ready(function(){

            // Material Select Initialization
            $('.mdb-select').material_select();
            
            // Data Picker Initialization
            $('.datepicker').pickadate();

            $('#pledge1').change(function(e){
                var pledge = $(this).val();
                
                $('#pledge2').val(pledge);
            })

            $('#monthly_install1').change(function(e){
                var pledge = $(this).val();
                
                $('#monthly_install2').val(pledge);
            })
            $('#mode_payment1').change(function(e){
                var pledge = $(this).val();
                
                $('#mode_payment2').val(pledge);
            })

            $('#monthly_depo1').change(function(e){
                var pledge = $(this).val();
                
                $('#monthly_depo2').val(pledge);
            })
        }); 
    </script>

<script type="text/javascript">
    $('#submit').click(function() {
        $.ajax({
            url: '../includes/register.php',
            type: 'POST',
            dataType: 'json',
            data: $('#form').serialize(),
            success: function(msg) {
                console.log(msg);
            }
        });
    });
</script>