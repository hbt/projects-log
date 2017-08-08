<?php

$m = [

    // TODO(hbt) NEXT integrate both set of metrics


    'metrics'         => [
        'profits' => [
            'revenue streams'  => [
                'cloud' => [
                    'nb users'              => [
                        'nb functions'
                    ],
                    'nb executed functions' => [

                    ],
                    'nb functions'          => [

                        'nb functions in registry' => [
                            'nb functions deploy tool / dockerhub images' => [
                                'nb functions passing build tool' => [

                                ],
                            ],
                        ],
                    ],
                    'nb developers'         => [

                    ],
                    'uptime %'              => [

                    ],
                ],
            ],

            'costs'            => [
                'domain names' => [
                    'functionshub.com' => '15',
                ],
                'hosting'      => [
                    'linode' => '20',
                ],
            ],

            'core user values' => [
                'fast',
                'cheap',
                'effective',
                'easy',

                'applied to function' => [
                    'minimal effort to create one',
                    'time to insert input, select action and output',
                    'low cost/bills',

                ],
            ],
        ],

        'goals'   => [
            'reliability'             => [
                'uptime' => [
                    'cron to auto restart server and dont conflict with remote-test commands',
                ],
            ],

            'developer adoption rate' => [
                'consistency in patterns' => [
                    'fix response + debugging workflow' => [
                        'logging/out/error feeds',
                    ],
                    'subdomains intead of ports',
                ],

                'scalability' => [
                    'fix stdout maxbuffer error ',
                    'enhance queue system to support parallel or queue',
                    // wait for billing
                    'add  vm instances creation ',
                ],
            ],

            'speed' => [
                'reuse containers for the same user',
            ],

            'cost effective' => [
                'add billing',
                'cover nesting issue and tracking',
//                'gcloud night instance/free computing/p2p/local/other cloud providers etc.',
            ],

            'security'                => [
                'https' => [
                ],
            ],

            'increase nb developers' => [
                // TODO(hbt) NEXT 
                'replicate usability/ease-of-use of cloud functions (gcloud/aws-lambda/iron etc.)' => [
                    'find an angle to get those devs',
                    'review workflow and utilities/tools to make existing cloud functions callable and part of functionshub -- supporting bo',
                ],
            ],

            'increase nb users' => [
                'website',
            ],
            
        ],
    ],


    'profits roadmap' => [
        'revenues' => [
            'pay per use computing' => [
                'nb users'      => [
                    'nb functions' => [

                        'function' => [
                            'nb calls'           => [

                            ],
                            'speed of execution' => [

                            ],
                        ],
                    ],
                    'usability'    => [
                        'feedback speed and relevancy'          => [

                        ],
                        'nb relevant actions matched per input' => [

                        ],
                        'time to find action in search'         => [
                            'nb aliases relevant to context/domain' => [

                            ],

                            'nb users abandoning action search'     => [

                            ],
                        ],
                        'function complexity level'             => [
                            'usage of variables, multiple inputs/outputs, other functions, complex functions' => [

                            ],
                        ],
                    ],
                ],
                'nb developers' => [
                    'nb steps and time from dev to functionshub deploy' => [

                    ],
                    'revenue'                                           => [

                    ],

                ],
            ],
            'service'               => [
                'redhat like maintenance'     => [

                ],
                'jobs / contracting platform' => [

                ],
                'human api. rabbittask'       => [

                ],
            ],
        ],
    ],


];
