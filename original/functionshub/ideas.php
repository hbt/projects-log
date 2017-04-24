<?php

// tracks ideas
//ideas not prioritized. just a gigantic dump
// also check https://github.com/hbt/functionshub/issues?q=is%3Aissue+is%3Aopen+label%3Aidea

$t = [

    'use webui to create/edit function definitions -- 1 file 1 function or 1 to many',
    'end files .fndef.yml',

    'namespaces and relative hbt/ fh/ or /fh ',
    'have all functions images under fn/ or labeled/tagged',
    'scale functions -- make it easy to add new ones' => [

            'helper'                          => [

                // Enforcing a naming convention for functions
                // add input output definition infn yml
                'check fn def' => [

                ],
                'build docker' => [

                ],
                'run tests'    => [

                ],
                'local/remote' => [

                ],

            ],

            'mkdir string',

            'one entry point /main'           => [

            ],

            'function per file'               => [

            ],
            'functions in one file'           => [
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

            'fhs utility -- helps with dev'   => [
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
        'strings prototype'                               => [

            'strings prototype'                     => [


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

                        ],
                    ],
                ]
            ],

            'domains'                               => [
                'buy functionshub.com',
                'github handle',
                'twitter handle',
                'aws account',
                'review passwds',
            ],

            'create example with raw functions'     => [
                'unknowns'                                    => [

                    'protocol buffers or reinvent wheel with json',
                    'inv faas vs iron functions',
                    'inv microcule wrappers + communication',
                    'decide on architecture . server within docker container?',
                    'communication json and streams -- inv streams meaning exactly',
                    'scaling requests -- lambda, ec2 orchestration?',
                ],

                'strings docker'                              => [
                    'faas orchestration or iron functions?',
                    '',
                ],

                'server'                                      => [
                    'api.functionshub.com',
                    'validate call against registry',
                    'execs call',
                    'output with type',
                ],

                'create ruby wrapper'                         => [
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


        'reading api evangelist archive for insights'     => [
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


        'functionsregistry'                               => [
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

        // TODO(hbt) NEXT really inv zapier for integrations with gdrive and such instead of reinventing
        // TODO(hbt) NEXT inv if c9 can be used as oss https://github.com/c9/core -- install locally and check editor in browser (use docker)

        'tag line'                                        => 'Automate Anything Anywhere',
        'find out how they got their ratings indexed here -- stars appear near google result https://www.google.ca/search?q=phpstorm+node+ide+completion&oq=phpstorm+node+ide+completion&aqs=chrome..69i57j0l2.4760j0j4&sourceid=chrome&ie=UTF-8',

        'gcloud'                                          => [
            'containers + pods + autoscaling + docker within docker',
        ],

        '4 pricing constants'                             => [
            'cpu',
            'memory',
            'storage and IO access',
            'bandwidth',
        ],


        'video to mp3 - dld  or to drive'                 => [
            // -- maybe use transfer.sh for storage for now
            'youtubedl' => [
                'i - url',
                'o - file url',
            ],
            'avconv '   => [
                'i - file url',
                'o - file url',
            ],
            'gdrive'    => [
                'i - folder , file url',
                'o - gdrive file url',
            ],
            'dld'       => [
                'i - file url',
                'o - stream to dld content',
            ],

        ],






];

?>