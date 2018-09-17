$(document).ready(function(){
    $('#logout').click(function(){
        $.ajax({
            url: '../includes/logout.php',
            type: 'POST',
            dataType: 'json',
            data: {},
            success: function(a){
                localStorage.clear();
                window.location = "../index.php";
            },
            error: function() {

            }
        });
    });
});