$(document).ready(function(){
    $("form").submit(function() {
        var error=false;
        var errorText;
        if($( "#form_base_currency option:selected" ).text()==$( "#form_target_currency option:selected" ).text())
        {
            errorText="Base and target currency must be different!";
            error=true;
        }

        if(!$.isNumeric($("#form_amount" ).val())||$("#form_amount" ).val()<=0)
        {
            error=true;
            errorText="This amount is not valid!";
        }
        if(error){
            $("#error").text(errorText);
            $("#error").addClass("alert alert-danger");
            return false;
        }
    });
});