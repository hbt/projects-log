<?php

$t = [

    'roadmap'      => [
//        'storage service',
//        'gcloud setup and experiments',
        'caching',
        'scaling & queuing',
        'youtube/phone replacement',

        'review',
        'token service',
        'multiuser support',
        'improve development and add more services - ',
        'readability',
        'static pages',
        'add billing',
    ],

    'next'         => [

        'refactoring'                 => [

            'gcloud'                                                                                    => [
//                'document changes done on server' => [
//                ],
//                'install etckeeper' => [
//                ],
                'set up docker server'                          => [
//                    '20G',
//                    'add permanent disk 50G',
//                    '20g' => [
//                        'add note fstab',
//                        'test dynamic resize gcloud ',
//                    ],
//                    'put docker on 50G',
//                    'fix scripts to work with new URL',
//                    'get docker server running and pass tests',
                    'fix tests' => [
//                        'remote test',
                        'storage token' => [
//                            'fix email forwarding',
//                            'get fh token',
//                            'token' => [
//                                'remote',
//                            ],
//                            'ssh' => [
//                                'add scpd scpu',
//                            ],
//                            'add phone token',
//                            'save token and reuse that in test',
//                            'add readme',
                        ],
//                        'hn',
                    ],
//                    'vcsh commit cron not working' => [
//                        
//                        'res cron',
//                    ],
//                    're-enable boot static dc up',
                ],
//                'set up incremental backup system on 50G '      => [
//                    'install',
//                    'review inc instruction',
//                    'bak -- exclude /mnt/disk',
//                    'cron',
//                    'changeslog',
//                ],
//                'backup vm image? or look into ansible script ' => [
//                ],
                'add https -- easy to do?'                      => [
                    'https://stackoverflow.com/questions/11744975/enabling-https-on-express-js',
                    'https://certbot.eff.org/#ubuntuxenial-other',
                ],
                'test gmail email fowrard' => [
                ],
                'update .ssh gpg-keys' => [
                ],
            ],
            'fix node messaging queue to prevent too many concurrent requests -- 1 at the time for now' => [
            ],
            'add new phone system -- keep older as bak for now'                                         => [
                'flag project as deprecated',
            ],
            'fix the .env and env_XXX  files ' => [
            ],

            'write blog next goal/roadmap/next effective stuff/ major roadblock/bottleneck'             => [
            ],
            'inv strong typing in schema -- view https://developer.github.com/v4/reference/query/' => [
            ],
            'inv vault for keys + config' => [
            ],


            'review'                                                                                    => [

                'cache'                    => [
                    'log request and get the file instead of downloading again',
                ],


                'write cheap model'        => [
                    'queue using phone'                     => [
                    ],
                    'queue using server pool and resources' => [
                    ],
                    'using queue -- current computer only',
                ],


                'replace phone js'         => [
                    'fix parallel processing or creating waiting pool based on resources',
                    'disk size checks',
                ],
                'auto clean requests data' => [
                ],
            ],


        ],

        'post refactor'               => [
            'review todos and integrate next steps'                                                                       => [
            ],
            'run tests in browser to ease filtering'                                                                      => [
            ],
            'rethink token implementation'                                                                                => [
            ],
            'add user + restrictions'                                                                                     => [
                'file exists',
            ],
            'add exec per user -- think billing'                                                                          => [
            ],

            'add fh helper in function -- parsing request, exec function, handling callback etc.'                         => [
            ],

            'review new node version with special block for sync vs async code -- removes dep on sync/wait/defer library' => [
            ],

        ],

        'read'                        => [

//            'fh',
//        'fh readability - http://www.economist.com/news/finance-and-economics/21702756-abenomics-may-have-failed-live-up-hype-it-has-not-failed-and',
//        'http://www.economist.com/news/finance-and-economics/21702756-abenomics-may-have-failed-live-up-hype-it-has-not-failed-and',
            'create',
            'create' => [
                'str',
                'sha1',
            ],
            'deploy',
            'map',
        ],


//        'test nb processes' => [
//            'write file + random nb',
//        ],

        'fix tests to use post',
        'fix next todos everywhere',
        'fix phone.js',
        'start using docker run --rm',
        'clean up remote containers',
        'fix remote tests',

        'separate logging from output for debugging purposes. consider using file',
        'add helper to find image assoc to function',


        'brainstorm mp3 example flow' => [
            'functions' => [
                'youtubedl function' => [
//                    'fn',
//                    'docker test',
//                    'raw test',
//                    'add storage service',
                ],
                'mp3 converter'      => [
//                    'test',
//                    'avconv docker',
//                    'refactor',
                ],
                'gdrive upload'      => [
//                    // inv hashicopr vault and token storage
//                    'test',
//                    'test' => [
//                        'strfile, strfileo? check',
//                        'drive ls',
//                    ],
//                    'code' => [
//                        'drive/token/get',
//                        'drive/upload',
//                        'str filepath, destination drive folder',
//                        'copy drive/token',
//                        'upload',
//                        'drive path and file',
//                    ],
//                    'deploy',
                ],
                'del file'           => [
//                    'test',
//                    'file/rm',
//                    'name,ok',
//                    'check access',
                ],
                'multiple links'     => [
//                    '2links',
//                    'dld to phone',
                ],
            ],
        ],


    ],

    'later'        => [

        'think about services and building them separately from code -- like docker functinos?',

        'api support chain'                                                                                => [
//  fh('url').call('youtube/dld').call('audio/extract').upload('tmp').cleanUp()
        ],

        'all requests return json instead raw is passed. json is default'                                  => [
        ],

        'js functions - add namespace e.g drive/token/get would map to Functions.drive.token.get instead of Functions.get',

        'use full filepath for storage service',

        'load zsh and other stuff for debugging -- view pmr image'                                         => [
        ],

        'safeguard kill'                                                                                   => [
            'kill process or contain it during dev -- needed if bug or accident results in infinite loop or such. user shouldnt pay for that',
            'limit container resources - specify resources and kill order in fndef -- resources monitoring. shouldnt scale a bug',
        ],

        'services storage'                                                                                 => [
            'user storage vs permanent storage',
            'one is billed to user, the other is billed for developer as permanent storage for their saas ',
        ],

        'add asserts'                                                                                      => [
        ],

        'add type checking for input'                                                                      => [
        ],

        'improve dev process and make it more resilient and better error messages when creating functions' => [
            'also remove reliance on cl(body) for debugging. ',
        ],

        'add stress on gcloud'                                                                             => [
        ],

        'fix image id'                                                                                     => [
            '/run different from /debug',
        ],
        'figure out how the dev-helper will communicate via docker',

        'fix dc down on server -- reduce timeout',
        'replace copy by a dc mount volume for /function -- verify dockerignore works ',

        'extract watch as a local cli command ',

        'add auto-detection / warning about proxies -- '                                                   => [
            'Creating network "php_default" with the default driver
ERROR: could not find an available, non-overlapping IPv4 address pool among the defaults to assign to the network
'
        ],

        'watch'                                                                                            => [
            'fix watch to use wait #127 or add queue + move singleton to branch -- add issue manager',
            'https://github.com/mikeal/watch/pull/127#issuecomment-296496818',
        ],

        'make repo private'                                                                                => [
            'check backup system works with private git repos',
        ],

        'set up gitlab backup'                                                                             => [
            'dump repo',
            'dump issues',
        ],

        'inv yml/json schemal validaton',

        'accept custom names under run/XXX'                                                                => [
        ],

        'same origin attacks and billing'                                                                  => [
        ],

        'docker image and container management'                                                            => [
            'remove all the temporary ones and prevent code from creating new ones',
            'also kill running containers on docker-compose down -- they are not treated as children containers',
        ],

        'readability'                                                                                      => [
            'check -- ',
            'https://github.com/luin/readability',
            'implement as function -- make it easy to implement/reuse',
        ],

        'function args '                                                                                   => [
            'autoconvert single arg to array',
        ],

        'storage purge options'                                                                            => [
            'remove files older than X',
        ],
    ],


    'issues todos' => [

        'docker prune #13' => [
            'upgrade docker to get the --filter option',
            'auto remove images and containers -- use until=XXX filter',
            'docker image prune --filter "until=6h"',
            'apply to containers as well',
        ],
    ],

];

?>