<?php
namespace App\Models;
use Core\Model;
use Nyholm\Psr7\Factory\Psr17Factory;
use Nyholm\Psr7Server\ServerRequestCreator;
use Psr\Http\Message\ServerRequestInterface;
use Stripe\Checkout\Session;
use Stripe\Stripe;
use Stripe\StripeClient;
use Stripe\Webhook;
$psr17Factory = new Psr17Factory();

$creator = new ServerRequestCreator(
    $psr17Factory,
    $psr17Factory,
    $psr17Factory,
    $psr17Factory
);

class StripePayment {
   
    public function __construct( private string $clientSecret, private string $webhookSecret = ''){
        Stripe::setApiKey($this->clientSecret);
        Stripe::setApiVersion('2022-11-15');    }
  
    public function startPayment( $cart){
         $cart = [];

        foreach($_SESSION["cart_item"] as $k => $v) { 
            
            $cart[] = [
                    'quantity' => $v['quantity'],
                    'price_data' => [
                        'currency' => 'EUR',
                        'product_data' => [
                            'name' => $v['name']
                        ],
                        'unit_amount' => $v['price']*100
                    ]
                ];            
        
           $session = Session::create([
                'mode' =>'payment',
                'line_items' =>  $cart,
                                
                'success_url' => 'http://localhost/best-wines/pay/success',
                'cancel_url' => 'http://localhost/best-wines/src/views/cart/cancel.php',
                'billing_address_collection' => 'required',
                'shipping_address_collection' => ['allowed_countries' => ['FR']],
             
            ]);
            header("HTTP/1.1 303 See Other");
            header('Location:'.$session->url);
    }
}

public function handle(ServerRequestInterface $request)
    {   
        
        $signature = $request->getHeaderLine('stripe-signature');
        $body = (string)$request->getBody();
        $event = Webhook::constructEvent(
            $body,
            $signature,
            $this->webhookSecret
        );
        if ($event->type !== 'checkout.session.completed') {
            return;
        }
        $data = $event->data['object'];
        $client = new StripeClient($this->clientSecret);
        $items = $client->checkout->sessions->allLineItems($data['id']);
        foreach($items as $item) {
            dump($item->description);
        }
        // On retrouve la commande dans la base de données
        // On la marque comme payé
       ;switch ($event->type) {
        case 'payment_intent.succeeded':
          $paymentIntent = $event->data->object;
        // ... handle other event types
        default:
          echo 'Received unknown event type ' . $event->type;
      }
    }
}