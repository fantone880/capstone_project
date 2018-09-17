var api = localStorage.getItem('token');

$( document ).ready(function(){
    $('#amountLoan').blur(function(){
        var a = document.getElementById('amountLoan').value;
        if(a != ""){
            $('#modalActivate').prop('disabled', false);
        }
    });

    $('#dtBasicExample').DataTable({
        "paging": false,
        "info": false,
        "ordering": false
    });
    $('.dataTables_length').addClass('bs-select');

    // Material Select Initialization
    $('.mdb-select').material_select();
    // Data Picker Initialization
    $('.datepicker').pickadate();

    $('#up-arr').click(function(){
        $('#up-arr').hide();
        $('#down-arr').attr('hidden', false); 
        $('.reminder').hide("fast");
    });
    $('#down-arr').click(function(){
        $('#up-arr').show();
        $('#down-arr').attr('hidden', true); 
        $('.reminder').show("fast");    
    });
    $('#submitLoan').click(function(){
        $.ajax({
            url: '../includes/ss.php',
            type: 'POST',
            dataType: 'JSON',
            data: $('#form').serialize(),
            success: function(msg){
                console.log(msg);
            }
        });
    });
    //checkboxes
    $('#selectAll').change(function(){
        $('.chkbox').prop('checked', $(this).prop('checked'));
    });
    $(document).on('change', '.chkbox', function(){
        if($(this).prop("checked") == false){
            $("#selectAll").prop('checked', false);
        }
        if($('.chkbox:checked').length == $('.chkbox').length){
            $('#selectAll').prop('checked', true);
        }
    });

    $(document).on('click', '#saveSelection', function(){
        var api = localStorage.getItem('token');
        var amountLoan = document.getElementById('amountLoan').value;
        var arr = [];
        $('input:checkbox.chkbox').each(function(){
            var a = (this.checked ? $(this).val() : "");
            if (a != ""){
                arr.push(a);
            }
        });

        $.ajax({
            url: '../includes/loan-comakers2.php',
            type: 'GET',
            dataType: 'JSON',
            data: {
                compids: arr,
                token: api,
                amountLoan: amountLoan
            },
            success: function(res){
                console.log(res[0]['amount']);
                var cmakers = "";
                var amnt = "";
                var name = "";
                for(var i=0; i<res[0]['people'].length; i++){
                    var c = i + 1;
                    name += "<tr>";
                    name += "<td style='width:10%;'>"+c+"</td>";
                    name += "<td style='width:90%;'>"+res[0]['people'][i]['lname']+", "+res[0]['people'][i]['fname']+" "+res[0]['people'][i]['extname']+" "+res[0]['people'][i]['mname']+"</td>";
                    name += "<td>"+res[0]['amount'][i]+"</td>";
                    name += "</tr>";

                    cmakers += "<input type='text' name='cmakers[]' value='"+res[0]['people'][i]['compid']+"' hidden />";
                    amnt += "<input type='text' name='amount[]' value='"+res[0]['amount'][i]+"' hidden />";
                }
                
                document.getElementById('cc').innerHTML = cmakers;
                document.getElementById('dd').innerHTML = amnt;
                document.getElementById('finalComaker').innerHTML = name;
            },
            error: function(){
                console.log('error');
            }
        });


    });

    $(document).on('click', '#submit', function(){
        var form = $('#form').serialize();
        $.ajax({
            url: '../includes/submitLoan.php?token='+api,
            type: 'GET',
            dataType: 'JSON',
            data: form,
            success: function(msg){
                console.log(msg);
            },
            error: function(e){
                console.log('error');
            }
        });
    });
});

function loan_dateCheck(){
    
    $.ajax({
        url: '../includes/loan_dateCheck.php',
        type: 'GET',
        dataType: 'JSON',
        data: {
            token: api
        },
        success: function(e){
            if(e['year'] == 0 && e['month'] < 6){

                $('#modalCoupon').modal('show');
                $('#form :input').attr('disabled', true);
            }   
        },
        error: function(){
            
        }
    });    
}


function body(){
    $('#modalActivate').prop('disabled', true);
        $.ajax({
            url: '../includes/loan-comakers.php',
            type: 'GET',
            dataType: 'JSON',
            data: {
                token: api
            },
            success: function(res){
                var fullname = "";
                for(var i=0; i<res.length; i++){
                    fullname += "<tr>";
                    fullname += "<td style='width:10%;'><div class='form-check'><input type='checkbox' class='form-check-input chkbox' id='materialUnchecked"+i+"' value='"+res[i]['compid']+"' name='comakers[]'><label class='form-check-label' for='materialUnchecked"+i+"'></label></div></td>";
                    fullname += "<td style='width:90%;'>"+res[i]['lname']+", "+res[i]['fname']+" "+res[i]['extname']+" "+res[i]['mname']+"</td>";
                    fullname += "</tr>";
                }
                // console.log(res);
                document.getElementById('cmakers').innerHTML = fullname;
                loan_dateCheck();
            },
            error: function(){
                
            }
        });    
        
}  

