<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
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
        'region' => env('SES_REGION', 'us-east-1'),
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
        'client_id' => '2175320352683954', //Facebook API
        'client_secret' => 'ed777284ee02d35adf252e4cd07924fe', //Facebook Secret
        'redirect' => 'http://127.0.0.1:8000/en/login/facebook/callback',

    ],


//    'twitter' => [
//        'client_id' => '2175320352683954', //twitter API
//        'client_secret' => 'ed777284ee02d35adf252e4cd07924fe', //twitter Secret
//        'redirect' => 'http://127.0.0.1:8000/en/login/facebook/callback',
//
//    ],

    'google' => [
        'client_id' => '961312907989-osgtnd67rf6vkijpu2t9usocq5dgi7bb.apps.googleusercontent.com', //google API
        'client_secret' => 'sqhTNzHQ6ETfsHuLhx6YEuRp', //google Secret
        'redirect' => 'http://127.0.0.1:8000/en/login/google/callback',

    ],

];
