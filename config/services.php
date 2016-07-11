<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '975166682597078',
        'client_secret' => '5b21571af611b5fe5e2c447fd972c72d',
        'redirect' => 'http://localhost:8000/facebook/callback',
    ],

    'google' => [
        'client_id' => '409696212199-8o9c8qpndv6lspgu2utupj45me6okdba.apps.googleusercontent.com',
        'client_secret' => 'AFPLCnVsuVxK2F2MOD-s7HAY',
        'redirect' => 'http://localhost:8000/google/callback',
    ],

];
