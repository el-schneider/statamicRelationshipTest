<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Sites
    |--------------------------------------------------------------------------
    |
    | The site handles need to be in sync with your Statamic config.
    | Make sure to add a new key for each site set in `config/statamic/site.php`.
    |
    | Snipcart's default currency, length and weight unit will be the ones
    | defined within the key of Statamic's default site.
    |
    | If you add/remove a site or change a value, you need to run
    | 'php please snipcart:migrate' to update the products collection and entries.
    |
    */

    'sites' => [

        'en' => [
            'currency' => 'USD',
            'length' => 'in',
            'weight' => 'oz',
        ],
        'de' => [
            'currency' => 'EUR',
            'length' => 'cm',
            'weight' => 'kg',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Collections & Taxonomies
    |--------------------------------------------------------------------------
    |
    | Define the handles of the products collection and taxonomies.
    |
    | If you change a value, you need to run 'php please snipcart:setup'
    | to re-generate the collection, taxonomies, and blueprints.
    |
    */

    'collections' => [
        'products' => 'products',
    ],

    'taxonomies' => [
        'categories' => 'categories',
        'taxes' => 'taxes',
    ],

    /*
    |--------------------------------------------------------------------------
    | Snipcart API Keys
    |--------------------------------------------------------------------------
    |
    | Your Snipcart API Keys for the Live and Test Environment.
    |
    */

    'live_key' => env('SNIPCART_LIVE_KEY'),
    'live_secret' => env('SNIPCART_LIVE_SECRET'),

    'test_key' => env('SNIPCART_TEST_KEY'),
    'test_secret' => env('SNIPCART_TEST_SECRET'),

    /*
    |--------------------------------------------------------------------------
    | Test Mode
    |--------------------------------------------------------------------------
    |
    | Set this to "false" to start processing real transactions.
    | You probably want to do this in production only.
    |
    */

    'test_mode' => env('SNIPCART_TEST_MODE', true),

    /*
    |--------------------------------------------------------------------------
    | Snipcart Version
    |--------------------------------------------------------------------------
    |
    | The Snipcart version you want to use.
    |
    */

    'version' => '3.0.19',

    /*
    |--------------------------------------------------------------------------
    | Cart Behaviour
    |--------------------------------------------------------------------------
    |
    | Set this to "none" to prevent the cart from opening every time
    | a product is added. Default is "null".
    |
    */

    'behaviour' => null,

    /*
    |--------------------------------------------------------------------------
    | Cart Image
    |--------------------------------------------------------------------------
    |
    | Define a Glide preset to be applied to the product image that shows
    | in the cart. You may also turn the manipulation off (not recommended).
    |
    */

    'image' => [
        'manipulation' => true,
        'preset' => ['w' => 240, 'q' => 75],
    ]

];
