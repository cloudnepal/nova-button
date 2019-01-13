<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Style options
    |--------------------------------------------------------------------------
    |
    | This key value pair allows you to override the default nova button styles
    | and add entirely new style key value pairs altogether that you need.
    | The css classes below are Tailwind-CSS that are come with Nova.
    |
    */

    'styles' => [
        'link' => 'cursor-pointer dim inline-block text-primary font-bold no-underline',
        'success' => 'cursor-pointer btn btn-default bg-success text-white',
        'primary' => 'cursor-pointer btn btn-default btn-primary',
        'warning' => 'cursor-pointer btn btn-default bg-warning text-white',
        'danger' => 'cursor-pointer btn btn-default bg-danger text-white',
        'info' => 'cursor-pointer btn btn-default bg-info text-white',
        'grey' => 'cursor-pointer btn btn-default bg-60 text-white',
        'success-outline' => 'cursor-pointer btn btn-default border border-success text-success',
        'primary-outline' => 'cursor-pointer btn btn-default border border-primary text-primary',
        'warning-outline' => 'cursor-pointer btn btn-default border border-warning text-warning ',
        'danger-outline' => 'cursor-pointer btn btn-default border border-danger text-danger ',
        'info-outline' => 'cursor-pointer btn btn-default border border-info text-info ',
        'grey-outline' => 'cursor-pointer btn btn-default border border-60 text-80 ',

        // add your own styles

    ],

    /*
    |--------------------------------------------------------------------------
    | Global defaults
    |--------------------------------------------------------------------------
    |
    | This package makes a few assumptions for initial global settings, seen below.
    | This makes the intital usage as easy as declairing: Button::make('Notify')
    | Edit these values if you want the defaults to be different globally.
    |
    */

    'defaults' => [

        'style' => 'link',

        'submittingStyle' => null,
        
        'submittingText' => null,

        'successStyle' => 'success-outline',

        'successText' => 'Done!',

        'errorStyle' => 'danger',

        'errorText' => 'Error',

    ],
];
