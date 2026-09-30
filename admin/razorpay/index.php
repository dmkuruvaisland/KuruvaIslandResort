<?php
require('config.php');
require('razorpay-php/Razorpay.php');
// use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;
session_start();

$logo= $_GET['logo'];
$name= $_GET['name'];
$desc= $_GET['desc'];
$person_name = $_GET['person_name'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$baseamount = $_GET['amount'];
$token = $_GET['token'];
$_SESSION['auth_token'] = $_GET['auth_token'];

$_SESSION['address_id'] = $_GET['address_id'];
$_SESSION['coupon_applied_id'] = $_GET['coupon_applied_id'];
$_SESSION['is_applied_coin'] = $_GET['is_applied_coin'];
$_SESSION['slot_id'] = $_GET['slot_id'];

// Create the Razorpay Order

use Razorpay\Api\Api;
$api = new Api($keyId, $keySecret);

my_log(date('d-m-Y H:i A'));
my_log("https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
my_log(json_encode($_REQUEST));
my_log('--------------------------------------------------');

//
// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders
//
$orderData = [
    'receipt'         => "",
    'amount'          => $baseamount * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

// ------------------------
$razorpayOrder = $api -> order -> create($orderData);
// $api = new Api($key_id, $secret);

// $api->order->create(array('receipt' => '123', 'amount' => 100, 'currency' => 'INR', 'notes'=> array('key1'=> 'value3','key2'=> 'value2')));

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);
    
    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

// -----------------------------

// $checkout = 'automatic';

// if (isset($_GET['checkout']) and in_array($_GET['checkout'], ['automatic', 'manual'], true))
// {
//     $checkout = $_GET['checkout'];
// }

$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => $name,
    "description"       => $desc,
    "image"             => $logo,
    "prefill"           => [
    "name"              => $person_name,
    "email"             => $email,
    "contact"           => $phone,
    ],
    "notes"             => [
    "address"           => "", // hello world
    "merchant_order_id" => uniqid(), //12312321
    ],
    "theme"             => [
    "color"             => "#395885"
    ],
    "order_id"          => $razorpayOrderId,
    // "callback_url"      => 'https://ecopen.info/bellvery.com/razorpay/verify.php',
    // "redirect"          => true,
];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}
$json = json_encode($data);
?>




<html>
<?php
if($token == "bdGy7wbe3iojdhhtty90ksy36472gd67loaydubdvwg376tdgdfwyv")
{
?>
    <body onload=payy()>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<form name='razorpayform' action="verify.php" method="POST">
    <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
    <input type="hidden" name="razorpay_signature"  id="razorpay_signature" >
</form>
<script>
// Checkout details as a json
var options = <?php echo $json?>;

window.onbeforeunload = null;
/**
 * The entire list of Checkout fields is available at
 * https://docs.razorpay.com/docs/checkout-form#checkout-fields
 */
options.handler = function (response){
    document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
    document.getElementById('razorpay_signature').value = response.razorpay_signature;
    document.razorpayform.submit();
    
};

// Boolean whether to show image inside a white frame. (default: true)
options.theme.image_padding = false;
options.modal = {
    ondismiss: function() {
        console.log("This code runs when the popup is closed");
        printt.postMessage("exit");
    },
    // Boolean indicating whether pressing escape key 
    // should close the checkout form. (default: true)
    escape: true,
    // Boolean indicating whether clicking translucent blank
    // space outside checkout form should close the form. (default: false)
    backdropclose: false
};

var rzp = new Razorpay(options);

function payy(e){
    rzp.open();
    e.preventDefault();
}
</script>

    </body>
<?php
}
else
{
?>
<body>
    <center>
        <div style="position:absolute; top:40%; left:18%;  color:#a3acac;">
           <img style="width:60%;" src="img/invalid.gif"> </br>
           <font style="font-size:40px;">Invalid token</font>
        </div>
    </center>
</body>
<?php
}
?>
</html>

<?php
function my_log($log_msg)
{
    $log_filename = "log";
    if (!file_exists($log_filename))
    {
        // create directory/folder uploads.
        mkdir($log_filename, 0777, true);
    }
    $log_file_data = $log_filename.'/log_' . date('Y-m-d') . '.log';
    // if you don't add `FILE_APPEND`, the file will be erased each time you add a log
    file_put_contents($log_file_data, $log_msg . "\n", FILE_APPEND);
}
?>
