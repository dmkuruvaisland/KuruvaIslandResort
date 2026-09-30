<?php
require('config.php');
session_start();
require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;
$success = "empty";
$error = "Payment Failed";
$auth = $_SESSION['auth_token'];

$adrs_id=$_SESSION['address_id'];
$coupon_id=$_SESSION['coupon_applied_id'];
$isapp_coin=$_SESSION['is_applied_coin'];
$sloteid=$_SESSION['slot_id'];

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);
    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
        
        $success = "true";
    }
    catch(SignatureVerificationError $e)
    {
        $success = "false";
        // $error = 'Razorpay Error : ' . $e->getMessage();
    }
    
    
    $result = file_get_contents('https://bellvery.com/api/save_payment_info?slot_id='.$sloteid.'&is_applied_coin='.$isapp_coin.'&coupon_applied_id='.$coupon_id.'&address_id='.$adrs_id.'&payment_method=1&auth_token='.$auth.'&razorpayPaymentID='.$_POST['razorpay_payment_id']);
}
?>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    body{background:#fff;font-family:ubuntu,helvetica,verdana,sans-serif;margin:0;padding:0;width:100%;height:100%;text-align:center;display:table}
    #text{vertical-align: middle; display: none; text-transform: uppercase; font-weight: bold; font-size: 30px; line-height: 40px}
    #icon{font-size: 60px;color: #fff; border-radius: 50%; width: 80px; height: 80px; line-height: 80px; margin: -60px auto 20px; display: inline-block}
    #text.show{display:table-cell}
    #text.s{color:#61BC6D;}
    #text.s #icon{background:#61BC6D}
    #text.f{color:#EF6050;}
    #text.f #icon{background:#EF6050}
    #delayed-prompt {position: fixed; top:70%; left: 0; right: 0;}
    .text {transition: 0.2s opacity; position: absolute; top: 0; width: 100%; opacity: 0; transition-delay: 0.2s;}
    .show-early .early, .show-late .late {opacity: 1}
    .show-early .late, .show-late .early {opacity: 0}
    #proceed-btn {color: #528ff0; text-decoration: underline; cursor: pointer; -webkit-tap-highlight-color: transparent;}
</style>
    </head>
    <body onload="pay_complete()">
        </br></br></br></br></br></br></br></br></br></br></br></br></br>
        
        <!--<div style="text-align:center; position:absolute; top:40%; left:0%;">-->
            <?php
        if ($success == "true")
        {
        ?>
        <div id="text" class="show s"><div id="icon">✔</div><br>Payment<br>Successful</div>
        <?php
        }
        else
        {
        ?>
        <div id="text" class="show f"><div id="icon">!</div><br>Payment<br>Failed</div> 
        <?php
        }
        ?>
        <!--</div>-->
        
        <div style="position:absolute; bottom:5%;  color:#a3acac;">
           <img style="width:30%;" src="img/pay_process.gif"> </br>Please wait, we will redirect you...
        </div>
        
        <script>
        const myTimeout = setTimeout(redir, 5000);
        function redir() {
          printt.postMessage("completed");
        }
        </script>
    </body>
</html>

