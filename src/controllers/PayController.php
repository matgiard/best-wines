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
        $this->renderView('pay/index', compact('total'));
    }
    public function paypal()
    {
        
        $environment = new SandboxEnvironment("Ad3W5NwEIU0dsnq-0ceovxjEu4rMfLjiXByoqs08JqjYGS1rUy7oqwVprP4jWDr91NIe1fC9_kk2Ypbq", "EEE0U9BvSZfHmhV2jfZvElGXs8qvG1jtcGwPTbeDEhchYwA9vBmdSweerQTpySRSUQO6txEov_3guUAl");
        $client = new PayPalHttpClient($environment);
        
        $request = new OrdersGetRequest($_GET['orderId']);
        
        $response = $client->execute($request);
        
        dump($response->result->status);

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