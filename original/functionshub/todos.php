<?php

$t = [

    'next'  => [


        'function creation'    => [

            'use docker compose for active dev - document workflow + decisions' => [

            ],

            'fix build and run and update tests'                                => [
                'build on the fly and look up the function in fndef.yml',
            ],


        ],

        'add input support'    => [

        ],

        'video-mp3 functions'  => [

        ],

        'add stress on gcloud' => [

        ],

    ],

    'later' => [

        'figure out how the dev-helper will communicate via docker',

        'fix dc down on server -- reduce timeout',
        'replace copy by a dc mount volume for /function -- verify dockerignore works ',

        'extract watch as a local cli command ',

        'add auto-detection / warning about proxies -- ' => [
            'Creating network "php_default" with the default driver
ERROR: could not find an available, non-overlapping IPv4 address pool among the defaults to assign to the network
'
        ],

        'fix watch to use wait #127 or add queue + move singleton to branch -- add issue manager',

        'make repo private'                              => [
            'check backup system works with private git repos',
        ],

        'inv yml/json schemal validaton',
    ],


];

?>