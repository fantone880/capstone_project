$(document).ready(function(){
    $('#dtBasicExample').DataTable();
    $('.dataTables_length').addClass('bs-select');
});
$(document).ready(function(){
    $('#dtBasicExample1').DataTable();
    $('.dataTables_length').addClass('bs-select');
});
$(document).ready(function(){
    $('#dtBasicExample2').DataTable();
    $('.dataTables_length').addClass('bs-select');
});

function body(){
    var api = localStorage.getItem('token');
    
        $.ajax({
            url: '../includes/acc_details.php',
            type: 'GET',
            dataType: 'JSON',
            data: {
                token: api
            },
            success: function(msg){

                var arr = msg[0];
                var fullname = arr['fname']+" "+arr['mname']+" "+arr['lname'];
                var name = "Hi! "+arr['fname'];

                document.getElementById('fullname').innerHTML = fullname;
                document.getElementById('nss').innerHTML = name;
                document.getElementById('email').innerHTML = arr['email'];
                document.getElementById('contact').innerHTML = arr['main_num'];
                document.getElementById('mon_pledge').innerHTML = arr['pledge'];
                document.getElementById('total_pledge').innerHTML = arr['total_pledge'];
            }
        });
}