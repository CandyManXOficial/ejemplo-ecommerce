<?php


namespace App;

use Illuminate\Support\Facades\URL;
use Illuminate\Config;

use PayPal\Core\PayPalHttpClient;
use PayPal\v1\Payments\PaymentCreateRequest;
use PayPal\v1\Payments\PaymentExecuteRequest;
//Cuando se ponga en producción el programa descomentamos
//la linea de abajo y comentamos en SandBox
//use PayPal\Core\ProductionEnvironment;
use PayPal\Core\SandboxEnvironment;
class PayPal
{
    public $client, $enviroment;

    public function __construct()
    {
        $clientid = Config::get('services.paypal.clientid');
        $secret = Config::get('services.paypal.secret');

        $this->enviroment = new SandboxEnvironment($clientid, $secret);

        $this->client = new PayPalHttpClient($this->enviroment);
    }

//    Solicitud de cobro
    public function buildPaymentRequest($amount){
        $request = new PaymentCreateRequest();
        $body = [
            'intent' => 'sale',
            'transactions' => [
                'amount' => [
                    'total' => $amount, 'currency' => 'MXN'
                ]
            ],
            'payer' => [
                'payment_method' => 'paypal',

//                'payment_method' => 'credit_card',
//                'funding_instruments' => [
//                    ''
//                ]
            ],
            'redirecturls' => [
                'cancel_url' => '/',
                'return_url' => '/'
            ]
        ];

        $request->body = $body;
        return $request;
    }

}
