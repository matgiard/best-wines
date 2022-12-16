<?php

namespace App\Controllers;

use Core\Controller;
use Core\Partials\CheckLog;

use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Orders\OrdersGetRequest;

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

    }
}