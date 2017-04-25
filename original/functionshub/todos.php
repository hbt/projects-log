<?php

$t = [

    'next' => [


        'function creation' => [

            'schema' => [
                'create basic version',
            ],

            'fn def' => [
                'namespace',
                'name',
                'main and test',
                'tests',
                'version',

                // Note(hbt) use socket to build and run. generated docker name is fine and auto-populate it in fn def -- double check same hashcodes are produced -- use the version
                // rethink these 2 - if needed, users shouldnt have to set them
                'image',
                'containername',
            ],

            'figure out how the dev-helper will communicate via docker',


            'later'  => [

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
        ],


    ],


];

?>