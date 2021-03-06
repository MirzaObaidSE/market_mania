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

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
     'twitter' => [
        'client_id' => 'NYpbHzhdUUQGERNE1AiOUy1vS',
        'client_secret' => 'il0grNd5ZxsI7GoaQ10MVvQPyjv7NKLx5cneSj0djcyX1Ci4bG',
        'redirect' => 'http://localhost:8000/callback',
    ],
     'facebook' => [
        'client_id' => '1281919928501395',
        'client_secret' => 'e649188452f510bb1c028ee200467d25',
        'redirect' => 'http://localhost:8000/callback_facebook',
    ],
    'stripe' => [
        'model'  => 'User',
        'secret' => env('STRIPE_API_SECRET'),
],

];
