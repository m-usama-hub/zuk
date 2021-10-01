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
    'google' => [
        'client_id' => '281689270389-n6fmegfrf64db7ue592c3mp7p815nih8.apps.googleusercontent.com',
        'client_secret' => 'vKLxmRUhJI6PWggwZpwudyIg',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],

    'facebook' => [
     'client_id' => '528448328193909',
     'client_secret' => 'fc748401b0734a3e2a31ff61ff06f501',
     'redirect' => 'http://localhost:8000/auth/facebook/callback',
   ],

];
