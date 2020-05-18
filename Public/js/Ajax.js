$(document).ready(function(){
    $("#email").keyup(function(){
        var user = $(this).val();
        $.post("../Ajax/checkUsername", {email:user}, function(data){
            $("#messageUsername").html(data);
        });
    }); 
});