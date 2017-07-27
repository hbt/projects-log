<?php

$t = [

    'roadmap' => [
//        'storage service',
        'gcloud setup and experiments',
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

    'next'    => [

        'refactoring'                 => [

            'gcloud '               => [
//                'disable stuff on playground (billing)',
                'set up functionshub.com + basic static page' => [
//                    'write static hello world via docker exposed /static' => [
//                        'docker apache2 setup ',
//                    ],
//                    'basic vm and expose IP',
                    'basic config vm' => [
////                        'add ssh key',
////                        'quick ssh test ',
//                        'vcsh' => [
////                            'config gitrepo similar to hbtlabs',
////                            'update dfeXXX aliases',
//                        ],
////                        'set up vcsh and config',
//                        
                    ],

//                    'start apache2' => [
//                    ],

                    'fix dns' => [
                        'https://cloud.google.com/dns/quickstart',
                        'https://console.cloud.google.com/net-services/dns/zones/functionshub?project=functionshub',
                        'dns zone thing??',
                        'added stuff to namecheap',
                    ],
                    'ssh aliases' => [
                    ],
                    'test' => [
                        'shutdown vm / reboot / relaunch and verify storage + IP lookup',
                    ],
                    'add gnalaytics' => [
                    ],
                    'vm snapshot?' => [
                    ],
                    'update fhd -- xterm' => [
                    ],
                    'add cron prune images/cotnainers docker' => [
                    ],
                    'double check email forwarding' => [
                    ],
                ],
                'set up docker server' => [
                    'add permanent disk 50G',
                    'put docker on 50G',
                ],
                'review config and make sure it is easy to set up / migrate ... i.e data is on persistent disk and vm can be replicated easily for load-balancing and scale' => [
                ],
                'backup vm image? or look into ansible script ' => [
                ],
                'fix node messaging queue to prevent too many concurrent requests -- 1 at the time for now' => [
                ],
                'add new phone system -- keep older as bak for now' => [
                    'flag project as deprecated',
                ],
                'add https -- easy to do?' => [
                ],
                'write blog next goal/roadmap/next effective stuff/ major roadblock/bottleneck' => [
                ],
//
////                'check products',
//                'basic' => [
////                    'free account',
////                    'set up vm 4cpu 4gb',
////                    'experiment resizable storage',
//                ],
//
//                'resizable storage -- flexible, remount? '          => [
//                    'exp cloud storage buckets -- check speed and access + share on multiple vms',
//                    'https://stackoverflow.com/questions/26910960/share-a-persistent-disk-between-google-compute-engine-vms',
//                ],
//                'experiment with load balancer + stress + multiple vms and autoscaling options' => [
//                ],
//                'experiment with kubernetes and container engine' => [
//                    'containers and autoscaling vs VM',
//                    'gcp docker registry ',
//                ],
            ],

            'set up functionhub.com on gcloud' => [
                'check price functionhub.com',
                'dns lookup',
                'static homepage',
                'set current linode on gcloud',

                'gcloud experiments' => [

                    'review products/services',

                    'plan' => [
                        'gcloud' => [

                        ],
                    ],
                ],
            ],


            'cache'                            => [
                'log request and get the file instead of downloading again',
            ],


            'write cheap model'                => [
                'queue using phone'                     => [
                ],
                'queue using server pool and resources' => [
                ],
                'using queue -- current computer only',
            ],


            'replace phone js'                 => [
                'fix parallel processing or creating waiting pool based on resources',
                'disk size checks',
            ],
            'auto clean requests data'         => [
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

    'later'   => [

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


];

?>