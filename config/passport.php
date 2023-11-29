<?php

return [
    'grant_types' => [
        'password',
        'authorization_code',
        'personal_access',
        'client_credentials',
    ],

    'defaults' => [
        'guard' => 'api',
        'password_client' => 'your-password-client',
    ],

    'clients' => [
        'your-personal-access-client' => [
            'provider' => 'users',
            'name' => 'Personal Access Client',
            'redirect' => '',
            'personal_access_client' => true,
            'password_client' => false,
            'revoked' => false,
        ],
    ],    
];
