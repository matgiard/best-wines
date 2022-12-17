<?php

namespace App\Controllers;

use App\Models\Invoice;
use App\Models\StripePayment;
use Core\Controller;
use Core\Partials\CheckLog;
use Nyholm\Psr7\Factory\Psr17Factory;
use Nyholm\Psr7Server\ServerRequestCreator;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Orders\OrdersGetRequest;
use App\Models\Sale;
use Psr\Http\Message\ServerRequestInterface;
use Stripe\Checkout\Session;
use Stripe\Stripe;
use Stripe\Webhook;

//En cours de réalisation
//Gestion des paiements
class PayController extends Controller
{
    //Choix du mode de paiement avec récupération du panier. Paypal seulement
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

    //Paiement avec PayPal
    public function paypal()
    {
        $environment = new SandboxEnvironment("Ad3W5NwEIU0dsnq-0ceovxjEu4rMfLjiXByoqs08JqjYGS1rUy7oqwVprP4jWDr91NIe1fC9_kk2Ypbq", "EEE0U9BvSZfHmhV2jfZvElGXs8qvG1jtcGwPTbeDEhchYwA9vBmdSweerQTpySRSUQO6txEov_3guUAl");
        $client = new PayPalHttpClient($environment);
        $request = new OrdersGetRequest($_GET['orderId']);
        $response = $client->execute($request);
        $OrderId = $response->result->id;
        // dd($response);
        if ($response->result->status == 'COMPLETED') {
            $sale = new Sale();
            $invoice = new Invoice();
            $i = 0;
            while ($i < count($_SESSION["cart_item"])) {
   
                foreach ($_SESSION["cart_item"][$i] as $k => $v) {
                    $k = 'id';
                    $v = $sale->setId_product($_SESSION["cart_item"][$i]['id']);
                    $k = "quantity";
                    $v = $sale->setQuantity($_SESSION["cart_item"][$i]['quantity']);
                    $k = 'total_price';
                    $v = $sale->setPrice_Total_Product($_SESSION["cart_item"][$i]['total_price']);
                    $k = 'orderId';
                    $v = $sale->setOrderId($OrderId);
                }
                $i = $i + 1;
                $sale->InsertSale();
            }
                $clientfullname = $response->result->payer->name->given_name.' '. $response->result->payer->name->surname;
                $clientfullAddress = $response->result->purchase_units[0]->shipping->address->address_line_1.' '.$response->result->purchase_units[0]->shipping->address->admin_area_2.' '.$response->result->purchase_units[0]->shipping->address->postal_code;
                $totalpricepaid = $response->result->purchase_units[0]->amount->value;
                foreach ($_SESSION["cart_item"] as $k => $v) {
                    $k = 'clientName';
                    $v = $invoice->setClientName($clientfullname);
                    $k = "billingAddress";
                    $v = $invoice->setBillingAddress($clientfullAddress);
                    $k = 'total_price';
                    $v = $invoice->setTotal_price($totalpricepaid);
                    $k = 'orderId_Invoice';
                    $v = $invoice->setOrderId_Invoice($OrderId);
                }
                $i = $i + 1;
                $invoice->InsertInvoice();
            $invoice = new Invoice;
            $lastInvoice= $invoice->findLastInvoice();
            $this->renderView('pay/success', compact('lastInvoice'));
        } else {
            echo 'echec du paiement';
        }
        $this->renderView('pay/success', compact('lastInvoice'));

    }

    //En cours de réalisation
    //Paiement avec stripe
    public function stripe()
    {
        $psr17Factory = new Psr17Factory();
        $creator = new ServerRequestCreator(
            $psr17Factory,
            $psr17Factory,
            $psr17Factory,
            $psr17Factory
        );
        $request = $creator->fromGlobals();
        $webhookSecret = "whsec_965cb64d94e375389a66fdb6794f9ab58e0fbb247d4d2150d95e84f8c37b314d";
        $clientSecret = "sk_test_51MEasAEPDX7SWVQZvPHBXeSIey6CjzcXyZAOhfNjVNDMmL5StAzpzdmcJuWCnHu4gSNm0pAnBqL12Th9ms1ze6hY00kyOL5ex1";
        $cart = $_SESSION['cart_item'];
        $payment = new StripePayment($clientSecret, $webhookSecret);
        $stripePayment = $payment->startPayment($cart);
        $test = $payment->handle($request);
        dd($test);
        $this->renderView('pay/index', compact('total', 'stripePayment', 'payment', 'test', 'psr17Factory', 'creator', 'request'));
        header("HTTP/1.1 303 See Other");
        // header('Location: ' . $session->url);
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
