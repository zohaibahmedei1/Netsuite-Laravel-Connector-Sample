<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Core Service Configuration
    |--------------------------------------------------------------------------
    */
    'endpoint'  => env('NETSUITE_ENDPOINT', '2020_2'),
    'host'      => env('NETSUITE_HOST', 'https://6389585-sb1.suitetalk.api.netsuite.com'),
    'account'   => env('NETSUITE_ACCOUNT', '6389585_SB1'),

    /*
    |--------------------------------------------------------------------------
    | Token Based Authentication
    |--------------------------------------------------------------------------
    | If a token is defined, the service will assume TBA should be used and
    | will depend on the other three fields to be set correctly. The only
    | optional setting here is signatureAlgorithm.
    */
    'consumerKey'           => env('NETSUITE_CONSUMER_KEY', 'e3450a6cb5791887d954e87d9d277b3d69af5fdacdb1150ec97e65668de4c983'),
    'consumerSecret'        => env('NETSUITE_CONSUMER_SECRET', 'e45dc9362100b062fead160f5751e328ae0973e8227c7c2ad9958866257584b7'),
    'token'                 => env('NETSUITE_TOKEN_KEY', 'a0aceeeda9ed166918a1f904ada0f9d3127170d7d850a931cd9618db22649a9f'),
    'tokenSecret'           => env('NETSUITE_TOKEN_SECRET', '9f7a6886c43ab0ebf931fbceea73159fa0377717f605d4dbdabdb880727eaa25'),
    'signatureAlgorithm'    => env('NETSUITE_HASH_TYPE', 'sha256'),

    /*
    |--------------------------------------------------------------------------
    | User Credentials Based Authentication
    |--------------------------------------------------------------------------
    | NetSuite has stopped supporting this method of authentication as of
    | web services version 2020.2. It is recommended to move to TBA even if
    | you're still using an older web services version.
    */
    'email'     => env('NETSUITE_EMAIL', ''),
    'password'  => env('NETSUITE_PASSWORD', ''),
    'role'      => env('NETSUITE_ROLE', ''),
    'app_id'    => env('NETSUITE_APP_ID', ''),

    /*
    |--------------------------------------------------------------------------
    | Logging
    |--------------------------------------------------------------------------
    | You can enable logging of all SOAP requests and responses and define
    | log directory.
    */
    'logging'       => env('NETSUITE_LOGGING', false),
    'log_path'      => env('NETSUITE_LOG_PATH', storage_path('logs')),

    /*
    |--------------------------------------------------------------------------
    | SoapClient Options
    |--------------------------------------------------------------------------
    | You can define options to be passed into the underlying SoapClient.
    | See https://www.php.net/manual/en/soapclient.construct.php for a list
    | of options and their effects.
    */
    'soap_options'  => [],
];
