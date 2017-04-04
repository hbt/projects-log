<?php

$t = [


    'end2end' => [
        'fh' => [


            'next' => [

                // TODO(hbt) NEXT 
                'clean up speed test',

                'workout kinks like express errors and tests ',
                '',
                'think about ditching it',

                'fix code quality and formatting for js',


                'scale functions -- make it easy to add new ones' => [
                    'mkdir string',
                    'function per file' => [
                        
                    ],
                    'functions in one file' => [
                        'require fh helper to parse json and redirect call',
                    ],

                    // TODO(hbt) NEXT inv json/yml schema definition tool -- required/optional fields, etc.
                    'functions.yml / json definition' => [
                        'fh def schema version ',
                        'name',
                        'description',
                        'parameters/arguments' => [
                            'arg1' => [
                                'name',
                                'description',
                                'type',
                                'required/optional',
                            ], 
                        ],
                        'version -- do it later',
                        'custom entry point -- pick one as default for now',
                        'tests input/outputs/description (will be used as example. same as phpdoc)',
                    ],

                    'fhs utility -- helps with dev' => [
                        'local/remote' => [
                            'verbose',
                            'detect language',
                            'fix file -- interpreter line',
                            'fix file perms',
                            'dld best docker image',
                            'solve docker issues -- missing deps and such automatically -- 26 other people experienced this issue and solved it using xx. attempting fix.',

                            '-- docker smart assistant - help you write your images and solve auto problems ',
                            'fhs kill -- in case of loops or such',

                        ],
                        'run tests',
                        'sync ',
                        'debug',
                    ],
                ],
            ],
            
        ],
        

        'gcloud' => [
            'containers + pods + autoscaling + docker within docker',
        ],


    ],

    '4 pricing constants' => [
        'cpu',
        'memory',
        'storage and IO access',
        'bandwidth',
    ],

    'tag line' => 'Automate Anything Anywhere',
    'find out how they got their ratings indexed here -- stars appear near google result https://www.google.ca/search?q=phpstorm+node+ide+completion&oq=phpstorm+node+ide+completion&aqs=chrome..69i57j0l2.4760j0j4&sourceid=chrome&ie=UTF-8',
    'strings prototype'              => [

        'plan' => [
            
            'domains' => [
                'buy functionshub.com',
                'github handle',
                'twitter handle',
                'aws account',
                'review passwds',
            ],
            
            'create example with raw functions' => [
                'unknowns' => [

                    'protocol buffers or reinvent wheel with json',
                    'inv faas vs iron functions',
                    'inv microcule wrappers + communication',
                    'decide on architecture . server within docker container?',
                    'communication json and streams -- inv streams meaning exactly',
                    'scaling requests -- lambda, ec2 orchestration?',
                ],

                'strings docker' => [
                    'faas orchestration or iron functions?',
                    '',
                ],

                'server' => [
                    'api.functionshub.com',
                    'validate call against registry',
                    'execs call',
                    'output with type',
                ],

                'create ruby wrapper' => [
                    'bb repo',
                    'fh handle + call server',
                    'send post',
                    'verbose mode',
                    'token=X function=x/y/z or function=z params[array]',
                ],
                
                

                'create docker container of string functions' => [
                    'server relays request to function',
                    'function execs and returns output',
                ],
            ],
            'create example with process functions' => [
                'inv using microcule to wrap processes and communicate',
            ]
        ],

        'brainstorm'               => [
            'write wrapper examples' => [
                'raw functions' => [
                    'select a few strings + array functions ',
                    'write example',
                ],
                'processes'     => [
                    'full youtube-dl example',
                ],
            ],


            'UI/UX first'            => [
                'prototype quick UI based on design ideas around flowcharts, function customization, pipelining, variables etc. == do it on paper',
            ],
        ],


        'reorg'                    => [
            '. build full example with multiple string functions and piping using fn run
. run test of iron functions on aws lambda -- already has fn commands
. write more on vision of all systems + ideas to further clarify things
. look into reusing containers . especially for strings and maybe if it can be accelerated further by keeping the container around (i saw a blog post from iron on that)
. think about billing and how to monitor resources. i can clearly monitor a container and bill accordingly but what if multiple users use the same container, do we need an additional api for billing. is it an early optimization?',

        ],

        'inv string functions'     => [
            'http://stringjs.com/',
            'https://sugarjs.com/',
            'https://google.github.io/closure-library/api/goog.string.html',
            'https://commons.apache.org/proper/commons-lang/apidocs/org/apache/commons/lang3/StringUtils.html',
            'http://gabceb.github.io/underscore.string.site/',
            'http://php.net/manual/en/ref.strings.php',
            'http://locutus.io/php/',
            'https://github.com/kvz/locutus',
            'https://docs.python.org/3/library/stdtypes.html',
            'https://ruby-doc.org/core-2.2.0/String.html',
        ],
        'systems involved summary' => [
            'iron functions'   => 'build and run functions - abstract docker commands',
            'strings image'    => 'docker container containing strings functions',
            'string functions' => 'actual code',
            ''                 => '',
        ],
        'think UX / api ',
        'prototoype'               => [
            'create cli wrapper that can be used inline like ' => [
                'fh "function" "param1" "param2" and then pipe ',
                'do it in php for now',
            ],
            'wrapper'                                          => [
                'takes piped input',
                'takes params ',
                'makes request to http ',
                'print output',

                'idea' => [
                    'inline piping / chaining ',
                ],
            ],
            'http'                                             => [
                'gets request',
                'check function exists',
                'exec function with params',
                'return output',

                'idea' => [
                    'use github for functions registry' => [
                        'registry repo',
                        'strings folder',
                        'users can contribute via forks',
                        'versions as revisions / tags',
                        'one file per function',
                        'folders as namespaces?',
                        'users can overwrite using their forks',
                        'examples' => [
                            'implode'    => [
                                'use https://github.com/iron-io/functions',
                                'iron-io'      => [
                                    'docker account',
                                    'sample',
                                    'create and push',
                                    'curl',
                                    'enhance' => [
                                        'add cvim buffer/tabs  search',
                                        'document process for both ',
                                        'pick 2 strings functions and write official with chain',


                                    ],
                                ],
                                'file example' => [
                                    'name - e.g implode',
                                    'description',
                                    'alias - e.g join',
                                    'params/arguments/optional/required',
                                    'version',
                                    'examples',
                                    'code???? - link to docker image with process/file exposed as a service',
                                ],
                            ],
                            'youtube-dl' => [
                                'inv using iron.io or faas or monecule',
                            ],
                        ],


                    ],
                    'case insensitive',
                    'check function exists using registry',
                    'check params prior to exec function ',
                    'useful error messages',
                ],
            ],
        ]
    ],

    'reading api evangelist archive' => [
        'inv'   => [
            'https://bip.io/docs',
            'http://cloud-elements.com/formula-builder/',
            'https://apiblueprint.org/',
            'http://swagger.io/',
            'apicraft - https://groups.google.com/forum/?fromgroups#!forum/api-craft',
            'https://apiant.com/',
            'https://en.wikipedia.org/wiki/Pipeline_(software)',
        ],
        'ideas' => [
            'restgit - https://apievangelist.com/2012/06/11/restgit-deploying-apis-from-my-github/',
            'dockerapp -- same security granularity as android apps',
            'embeddable functions (input/output) - widgets/apps/buttons etc.',
            'system design / use case for namespaces -- list actors/functions/workflows etc. e.g gmail and grasp domain ',
            'finding apis or apis finding you - https://apievangelist.com/2012/09/10/what-if-apis-should-be-finding-developers-instead-of-developers-discovering-apis/',
            'etl businesses' => [
                'https://apievangelist.com/2013/02/10/bringing-etl-to-the-masses-with-apis/',
            ],
            'every form is an api - https://apievangelist.com/2013/12/19/every-form-should-be-an-api/',
        ],

        'notes' => [
            'documentation' => [
                'code samples of usage',
                'recipies involving a function',
            ],
            'support'       => [
                'report unexpected output',
                'request help (jobs)',
                'supported/official apis ala redhat',
                'premium support for devs and regular users',
                'distinguish between LTS (long term supported) functions and partner functions -- avoid google/netflix api deprecation and incompatibility',
            ],
            'usability'     => [
                'focus on removing plumbing between apis -- converting data and such',
                'auth management of 3rd party services (zapier)',
                'google api explorer https://developers.google.com/apis-explorer/#p/drive/v3/drive.comments.create',
                'spec out a recipe for someone else to code',
                'integrate / embed create your own recipe in other sites / across site. e.g billing and alerting + what to do. specify a recipe and associate to a feature/page',
                'build widgets/apps/sites that can easily connect to recipes in functionshub -- e.g http://developer.wolframalpha.com/widgetbuilder/ http://127.0.0.1:4000/2011/06/22/widget-builder-environment-for-apis/',
            ],
            'exploration/console (google)',
            'management'    => [
                'existing stuff like dashboards, stats, metrics, logging etc. -- consider using a third party for now',
                'uptime/availability',
                'stats and mangement - apigee, 3scale, mashape, mashery',
            ],
        ]
    ],


    'reorg'                          => [


        'top'       => [

            'reorg',

            'add mindmap + log idea from 44 amongst others',
            'marketing , metrics braintstorm',

            'quick docker examples + inv flow - create image, deploy, turn on/off ala lambda' => [

            ],


            'add github experiment with webtask then try the docker like ones ironworker faas + serverless + kubernetes? -- check 21 links',
            'think about design of php/ruby/js docker service for strings and how to add new functions and make them available as services',
        ],


        'prototype' => [
            'think about design ',
            'build docker service exposing strings functions for php',
            'build wrapper contacting service for processing',
            'add ruby/js string functions and communication + wrapper example of cross-communication',
            'think about how it would be extended -- function registration, aliases, registry, robot(google search), matchers etc.',
            'think about docker orchestration kubernetes',
            'add other utility functions to manipulate dates and review sites for useful utilities and how they would be matched, organized and found',
            'build semi complex examples with arrays, if/foreach/ boolean and cross-language and create crawk',
            'think about webui and seo friendly way of finding functions/recipies/examples etc.',

            'experiments'     => [
                'provide function as a service using existing tools',
            ],
            'wrapper example' => [
                'nodejs 2 functions replace and substring that support params',
                'write ruby wrapper calling functions with webtask and accepting input',
            ],
            'webtask'         => [
                'replace webtask by something more flexible -- serverless? kubernetes?',
            ],
        ],

    ],


];

?>