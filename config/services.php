<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    // 'google' => [
    //     'client_id' => '556381023988-mk33th9hseb3u2se3mtkmd40v28a20ps.apps.googleusercontent.com', //USE FROM Google DEVELOPER ACCOUNT
    //     'client_secret' => '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', //USE FROM Google DEVELOPER ACCOUNT
    //     'redirect' => 'https://laravel-crud-1e534.firebaseapp.com/__/auth/handler'
    // ],

];
