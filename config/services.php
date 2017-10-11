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

    'google' => [
        'client_id' => '821339584559-5sq77qtcf5je8b6223gnc9vvs93qtupg.apps.googleusercontent.com',
        'client_secret' => 'w8Jq5JqyhBjz3cmb3lCQpUMg',
        'redirect' => 'http://assesorytimesa.dev:8080/auth/google/callback'
    ],

    'facebook' => [
        'client_id' => '1897955860530609',
        'client_secret' => 'c66dfce063b7682e6bbe95ec39ab312a',
        'redirect' => 'http://assesorytimesa.dev:8080/auth/facebook/callback'
    ],

    'twitter' => [
        'client_id' => 'WbtNU02Mby32onBwtUwx3PE9e',
        'client_secret' => 'SWdnpZI3EmvQNW60C2XfrN19XP5THGSYRApSeeahL4Zayccz09',
        'redirect' => 'http://assesorytimesa.dev:8080/auth/twitter/callback'
    ],

];
