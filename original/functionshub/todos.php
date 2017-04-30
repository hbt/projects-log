<?php

$t = [

    'next'  => [


        'function creation'           => [

            'endgoal' => [

//                'doc workflow'           => [
//                ],

//                'fix crash msg'          => [
//
//                ],

                'fix current workflow'   => [

//                    'fix ar' => [
//                        
//                    ],

//                    'add skeleton'               => [
//                        'files',
//                        'readme',
//                    ],
                    

//                    'add build all'              => [
//                        'get fndef',
//                        'build docker',
//                        'store version',
//                    ],

//                    'fix version' => [
//                        'add version',
//                        'add ignore',
//                        'fix build all',
//                        'update skeleton',
//                    ],

//                    'fix run'                    => [
////                        'mv run to fns',
////                        'flag js',
////                        'add simple run test ',
//                        'reuse debug flow',
//                        'run',
//                    ],


//                    'add remote runner with api' => [
//                        'test',
//                        'deploy and pass',
//                    ],


//                    'test with hello php'        => [
//                    ],
                    
                ],


                'move hello/js and test' => [
                ],

                'srm hello2'             => [
                ],


            ],


        ],


        'fix image id' => [
        ],

        'brainstorm mp3 example flow' => [
        ],

        'add input support'           => [
        ],

        'video-mp3 functions'         => [
        ],

        'refactor' => [
        ],

        'add stress on gcloud'        => [

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

        'accept custom names under run/XXX'              => [
        ],
    ],


];

?>