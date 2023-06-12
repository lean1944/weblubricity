<?php
include 'La-carta.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/fondo.css">
    <title>paypal</title>

</head>
<body>
   <br><br><br><br><br>

<div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
  <script src="https://www.paypal.com/sdk/js?client-id=AabWPwHI3IRj95zZ9KDLhL6ioA7FbbHuBE93Yr_jZJKfb8fcvpnCeO_QL8CLVhSGp_yyKU5VVHFcY-Em&currency=USD " data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'pill',
          color: 'blue',
          
          label: 'pay',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{
                amount:{
                    value:100
                }
            }]
          });
        },

       
        onApprove: function(data, actions) {
          actions.order.capture().then(function(detalles) {
            
            // Full available details
            window.location.href="productos.php"

           
            
          });
        },

        onCancel: function(data) {
            alert("pago cancelado")
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>


    
</body>
</html>

