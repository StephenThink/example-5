<?php

namespace App;

class StripeGateway implements Gateway
{
    public function create()
    {
//        performs the Stripe HTTP Request.
        var_dump('Slow Http request in progress.');
    }
}