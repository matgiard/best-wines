<?php

namespace App\Controllers;

use Core\Controller;
use Core\Partials\CheckLog;

use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Orders\OrdersGetRequest;
use Psr\Http\Message\ServerRequestInterface;
use Stripe\Checkout\Session;
use Stripe\Stripe;
use Stripe\Webhook;

class PayController extends Controller
{



    public function index()
    {


        CheckLog::checkClientIsLogged();
        $total = $_SESSION['total_price'];
        $paypal_items_array = [];

        foreach ($_SESSION["cart_item"] as $k => $v) {

            $paypal_items_array[] = [
                'id' => $v['id'],
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
                'items' => $paypal_items_array,
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




        if ($response->result->status == 'COMPLETED') {

            +$this->renderView('pay/success');
        } else {
            echo 'echec du paiement';
        }
    }

    public function stripe()
    {
        $stripe_items_array = [];

        foreach ($_SESSION["cart_item"] as $k => $v) {

            $stripe_items_array[] = [
                'quantity' => $v['quantity'],
                'price_data' => [
                    'currency' => 'EUR',
                    'product_data' => [
                        'name' => $v['name']
                    ],
                    'unit_amount' => $v['price'] * 100
                ]
            ];
        }

        Stripe::setApiKey('sk_test_51MFSr6DqvB6uQCmLYh57hTz529jASvKBjeORVylUg6190E6aIXaknfUa6ymuIaa24UA2LUUVZNvwuSsWhyrlHwUG002d6u3Qq0');
        Stripe::setApiVersion('2022-11-15');

        $session = Session::create([
            'line_items' =>  $stripe_items_array,
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

    // public function stripeHandle(ServerRequestInterface $request)

    // {
    //     $signature = $request->getHeaderLine('stripe-signature');
    //     $body = (string)$request->getBody();
    //     $event = Webhook::constructEvent(
    //         $body,
    //         $signature,
    //     );

    // }

    public function success()
    {
        $this->renderView('pay/success');
    }
}
