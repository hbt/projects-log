<?php

$t = [

    'next'  => [


        'function creation'           => [

        ],



        'brainstorm mp3 example flow' => [
            'functions' => [
                'youtubedl function' => [
//                    'fn',
//                    'docker test',
                    'raw test',
                    'add storage service',
                ],
                'mp3 converter' => [
                ],
                'gdrive upload' => [
                    // inv hashicopr vault and token storage
                ],
                'del file' => [
                ],
                'multiple links' => [
                ],
            ],
        ],




    ],

    'later' => [

        'add type checking for input' => [
        ],

        'improve dev process and make it more resilient and better error messages when creating functions' => [
            'also remove reliance on cl(body) for debugging. ',
        ],

        'add stress on gcloud'        => [
        ],

        'fix image id' => [
            '/run different from /debug',
        ],
        'figure out how the dev-helper will communicate via docker',

        'fix dc down on server -- reduce timeout',
        'replace copy by a dc mount volume for /function -- verify dockerignore works ',

        'extract watch as a local cli command ',

        'add auto-detection / warning about proxies -- ' => [
            'Creating network "php_default" with the default driver
ERROR: could not find an available, non-overlapping IPv4 address pool among the defaults to assign to the network
'
        ],

        'watch' => [
            'fix watch to use wait #127 or add queue + move singleton to branch -- add issue manager',
            'https://github.com/mikeal/watch/pull/127#issuecomment-296496818',
        ],

        'make repo private'                              => [
            'check backup system works with private git repos',
        ],

        'set up gitlab backup' => [
            'dump repo',
            'dump issues',
        ],

        'inv yml/json schemal validaton',

        'accept custom names under run/XXX'              => [
        ],
    ],


];

?>