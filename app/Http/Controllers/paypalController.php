<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paypalController extends Controller
{
    public function index(request $request){
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                'AYSq3RDGsmBLJE-otTkBtM-jBRd1TCQwFf9RGfwddNXWz0uFU9ztymylOhRS',     // ClientID
                'EGnHDxD_qRPdaLdZz8iCr8N7_MzF-YHPTkjs6NKYQvQSBngp4PTTVWkPZRbL'      // ClientSecret
            )
    );
    $payer = new \PayPal\Api\Payer();
    $payer->setPaymentMethod('paypal');
    
    $amount = new \PayPal\Api\Amount();
    $amount->setTotal('150.00');
    $amount->setCurrency('USD');
    
    $transaction = new \PayPal\Api\Transaction();
    $transaction->setAmount($amount);
    
    $redirectUrls = new \PayPal\Api\RedirectUrls();
    $redirectUrls->setReturnUrl(route('/paypal/return'))
        ->setCancelUrl(route('/paypal/cancel'));
    
    $payment = new \PayPal\Api\Payment();
    $payment->setIntent('sale')
        ->setPayer($payer)
        ->setTransactions(array($transaction))
        ->setRedirectUrls($redirectUrls);
        // After Step 3
try {
    $payment->create($apiContext);
    echo $payment;

    echo "\n\nRedirect user to approval_url: " . $payment->getApprovalLink() . "\n";
    return redirect($payment->getApprovalLink());
}
catch (\PayPal\Exception\PayPalConnectionException $ex) {
    // This will print the detailed information on the exception.
    //REALLY HELPFUL FOR DEBUGGING
    echo $ex->getData();
}
    }
    public function paypalreturn(){
dd(request()->all()))
    }
    public function paypalcancel(){
return "order cancel"
    }
}
