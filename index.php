<?php
require __DIR__ . '/vendor/autoload.php';

echo "Hello World"; 

$logger = new Monolog\Logger('Judopay');
$logger->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
$logger->addWarning('Foo');

$judopay = new \Judopay(
    array(
        'apiToken' => 'MgI5Wj9qcC5ofsTd',
        'apiSecret' => '40c75aeb17d8e60a9bf0d3430e99475bae25b58080012f185fbe4be0c8d55960 ',
        'judoId' => '1100747-435',
        //Set to true on production, defaults to false which is the sandbox
        'useProduction' => false,
		'logger' => $logger
    )
);

// create an instance of the WebPayment Payment model (or you can use the Preauth model) 
// if you only want to process a pre-authorisation which you can collect later.
$payment = $judopay->getModel('WebPayments\Payment');

// populate the required data fields.
$payment->setAttributeValues(
    array(
        'judoId' => '100747-435',
        'yourConsumerReference' => '12345',
        'yourPaymentReference' => '12345',
        'amount' => 10.00,
        'currency' => 'GBP',
        'clientIpAddress' => $_SERVER['REMOTE_ADDR'] ,
        'clientUserAgent' => $_SERVER['HTTP_USER_AGENT'],
    )
);

// Send the model to the JudoPay API, this provisions your webpayment and returns a unique reference along with the 
// URL of the page you'll need to dispatch your users to.

$webpaymentDetails = $payment->create();

/*
* Here's an example of the json returned, this is mapped into an Array.
* {
* postUrl: https://pay.judopay-sandbox.com/v1,
* reference: "3gcAAAoAAAAXAAAACQAAAMYG6P4SW.....CCc3iT-3tn5_RyWnmArDZAwyEkwQ"
* }
*/

$theWebPaymentReference = $webpaymentDetails["reference"];
$formPostUrl = $webpaymentDetails["postUrl"];
?>
<html>
<body>
<form action="<?php echo $formPostUrl;?>" method="post">
   <input  id="Reference" name="Reference" type="hidden" value="<?php echo $theWebPaymentReference;?>">
   <input type="submit" value="Pay now">
</form>
</body>
</html>
	
