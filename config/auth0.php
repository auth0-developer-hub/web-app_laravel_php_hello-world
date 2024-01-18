<?php

return [
    'domain' => env('AUTH0_DOMAIN'),
    'clientId' => env('AUTH0_CLIENT_ID'),
    'clientSecret' => env('AUTH0_CLIENT_SECRET'),
    'cookieSecret' => env('APP_KEY'),
    'audience' => [env('AUTH0_AUDIENCE')]
];
