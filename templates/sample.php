<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="../css/mdb.css" rel="stylesheet"> -->

</head>
<body>
<div class="container">
    <select id="province" class="form-control">
        <!-- <option disabled selected>Select Province</option> -->
    </select>
    <br />
    <select id="city"  class="form-control">
        <option>Select City</option>
    </select>
    <br />
    <select id="barangay"  class="form-control">
        <option>Select Barangay</option>
    </select>
</div>

    <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/mdb.min.js"></script>
</body>
</html>


<script>
    $(function(){
    var provinceOptions;
    var cityOptions;
    var brgyOptions;
    var nameCity = [];
    var codeCity = [];
    var nameBrgy = [];
    var codeBrgy = [];


        $.getJSON('../json/refprovince.json', function(result){
                provinceOptions+="<option disabled selected>Select Province</option>";
            $.each(result, function(i, province){
                // console.log(province);
                provinceOptions+="<option value='"+province.provCode+"'>"+province.provDesc+"</option>";
            });
            $("#province").html(provinceOptions);
            
        });
        $('#province').change(function(){
            $.getJSON('../json/refcitymun.json', function(result){
                $.each(result, function(cityCode, cityName){
                    
                    if(cityName.provCode == $('#province').val()){
                        nameCity.push(cityName.citymunDesc);
                        codeCity.push(cityName.citymunCode);
                    }
                    // cityOptions+="<option value='"+cityName.citymunCode+"'>"+cityName.citymunDesc+"</option>";
                });
                // console.log(codeCity);
                
                for(var a=0; a<nameCity.length; a++){
                    cityOptions+="<option value='"+codeCity[a]+"'>"+nameCity[a]+"</option>";
                }
                $("#city").html(cityOptions);
            });
        });
        $('#city').change(function(){
            $.getJSON('../json/refbrgy.json', function(result){
                $.each(result, function(brgyCode, brgyName){
                    // console.log(brgyName);
                    if(brgyName.citymunCode == $('#city').val()){
                        nameBrgy.push(brgyName.brgyDesc);
                        codeBrgy.push(brgyName.brgyCode);
                    }
                });
                // console.log(nameBrgy);
                for(var a=0; a<nameBrgy.length; a++){
                    brgyOptions+="<option value='"+codeBrgy[a]+"'>"+nameBrgy[a]+"</option>";
                }
                $("#barangay").html(brgyOptions);
            });
        });
        
    });
</script>
