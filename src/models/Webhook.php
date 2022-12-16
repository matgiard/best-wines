<?php

use Nyholm\Psr7\Factory\Psr17Factory;
use Nyholm\Psr7Server\ServerRequestCreator;
use Stripe\Stripe;

$psr17Factory = new Psr17Factory();

$creator = new ServerRequestCreator(
    $psr17Factory,
    $psr17Factory,
    $psr17Factory,
    $psr17Factory
);

$request = $creator->fromGlobals();
$payment =  Stripe::setApiKey('sk_test_51MFSr6DqvB6uQCmLYh57hTz529jASvKBjeORVylUg6190E6aIXaknfUa6ymuIaa24UA2LUUVZNvwuSsWhyrlHwUG002d6u3Qq0');
// $payment->stripeHandle($request);
