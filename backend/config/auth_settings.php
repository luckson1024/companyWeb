<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Authentication Redirect Paths
    |--------------------------------------------------------------------------
    |
    | Here you may specify the redirect paths after login based on user roles.
    | The 'default' key will be used if no role-specific path is found.
    |
    */

    'redirect' => [
        'default' => '/dashboard',
        'admin' => '/admin/dashboard',
        'manager' => '/manager/dashboard',
        'user' => '/user/dashboard',
    ],

    /*
    |--------------------------------------------------------------------------
    | Login Throttling
    |--------------------------------------------------------------------------
    |
    | Configure the number of attempts allowed before rate limiting kicks in
    | and the time window for the rate limiting in minutes.
    |
    */

    'throttle' => [
        'max_attempts' => 5,
        'decay_minutes' => 1,
    ],
];
