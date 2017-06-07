$(document).ready(function(){
    console.log("Hola Adentro");
    $("#prepare_payment_form").submit(function(e){
        e.preventDefault();
        var data = {
             action: 'index.php',
             payment_data: $('#prepare_payment_form').serialize()
          };
          $.post(data.action, data, function(response) {
             if(response.indexOf('Error: ') != -1) {
                alert("Error");
                return false;
             }
             var dgFlow = new PAYPAL.apps.DGFlow({trigger: 'execute_payment'});
             $('#execute_payment_form').attr('action', 'https://www.sandbox.paypal.com/webapps/adaptivepayment/flow/pay?expType=light&amp;payKey=' + response);
             $('#execute_payment').removeAttr('disabled');
          });
    });

});
