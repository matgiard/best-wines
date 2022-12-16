<?php

namespace App\Controllers;

use Core\Controller;
use Core\Partials\CheckLog;

use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Orders\OrdersGetRequest;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class PayController extends Controller
{



    public function index()
    {


        CheckLog::checkClientIsLogged();
        $total = $_SESSION['total_price'];
        $item_paypal_array = [];

        foreach($_SESSION["cart_item"] as $k => $v ) { 
            
            $item_paypal_array[] = [

                    'name' => $v['name'],
                    'unit_amount' => [
                        'value' => $v['price'],
                        'currency_code' => 'EUR'
                    ],
                    'quantity' => $v['quantity']
                ];            
        }

        $order = json_encode([
            'purchase_units' => [[
                'description' => "Panier de l'utilisateur n°" . $_SESSION['user']['id'],
                'items' => $item_paypal_array,
                'amount' => [
                    'currency_code' => 'EUR',
                    'value' => $total,
                    'breakdown' => [
                        'item_total' => [
                            'currency_code' => 'EUR',
                            'value' => $total
                        ]
                    ]
                ]

            ]]
        ]);
        
        $this->renderView('pay/index', compact('order'));
    }


    public function paypal()
    {
        
        $environment = new SandboxEnvironment("Ad3W5NwEIU0dsnq-0ceovxjEu4rMfLjiXByoqs08JqjYGS1rUy7oqwVprP4jWDr91NIe1fC9_kk2Ypbq", "EEE0U9BvSZfHmhV2jfZvElGXs8qvG1jtcGwPTbeDEhchYwA9vBmdSweerQTpySRSUQO6txEov_3guUAl");
        $client = new PayPalHttpClient($environment);
        
        $request = new OrdersGetRequest($_GET['orderId']);
        
        $response = $client->execute($request);
        
        dump($response->result->status);
        dump($response->result->payment_source);
        dump($response->result->purchase_units[0]->shipping);
        // dump($response);

        if ($response->result->status == 'COMPLETED') {

            //phpmailer 
            
            $this->renderView('pay/success');
        }else{
            echo 'echec du paiement';
        }
    }

    public function stripe()
    {
        $item_stripe_array = [];

        foreach($_SESSION["cart_item"] as $k => $v) { 
            
            $item_stripe_array[] = [
                    'quantity' => $v['quantity'],
                    'price_data' => [
                        'currency' => 'EUR',
                        'product_data' => [
                            'name' => $v['name']
                        ],
                        'unit_amount' => $v['price']*100
                    ]
                ];            
        }

        Stripe::setApiKey('sk_test_51MFSr6DqvB6uQCmLYh57hTz529jASvKBjeORVylUg6190E6aIXaknfUa6ymuIaa24UA2LUUVZNvwuSsWhyrlHwUG002d6u3Qq0');
        Stripe::setApiVersion('2022-11-15');

       $session = Session::create([
        'line_items' =>  $item_stripe_array,
        'mode' => 'payment',
        'success_url' => 'http://localhost/best-wines/pay/success',
        'cancel_url' => 'http://localhost/best-wines',
        // 'billing_adress_collection' => 'required',
        'shipping_address_collection' => [
            'allowed_countries' => ['FR']
        ],
        // 'automatic_tax' => [
        //     'enabled'
        // ],
        'metadata' => [
            'userId' => $_SESSION['user']['id']
        ]

       ]);

       header("HTTP/1.1 303 See Other");
       header('Location: ' . $session->url);

    }
    public function success()
    {
        $this->renderView('pay/success');
    }
}