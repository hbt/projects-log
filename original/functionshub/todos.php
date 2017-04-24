<?php

$t = [

    'next'  => [
        
//        Running and testing
        'dc ',
        'inv ',
        'inv' => [

            // Use Docker compose down but reduce the time instead of kill
            'dc down sleep',

            'dc up multi',

        ],

        'function creation' => [
            'clean gkeep',
            'fix watch to use wait #127 or add queue + move singleton to branch -- add issue manager',

            'figure out how the dev-helper will communicate via docker',

            'inv yml/json schemal validaton',
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
        ],


    ],


];

?>