<?php

$t = [

    'reading'             => [
        'api evangelist'  => [
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

        'top'             => [

            'add mindmap + log idea from 44 amongst others',
            'marketing , metrics braintstorm',

            'quick docker examples + inv flow - create image, deploy, turn on/off ala lambda' => [

            ],


            'add github experiment with webtask then try the docker like ones ironworker faas + serverless + kubernetes? -- check 21 links',
            'think about design of php/ruby/js docker service for strings and how to add new functions and make them available as services',
        ],

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

    'prototype'           => [
        'think about design ',
        'build docker service exposing strings functions for php',
        'build wrapper contacting service for processing',
        'add ruby/js string functions and communication + wrapper example of cross-communication',
        'think about how it would be extended -- function registration, aliases, registry, robot(google search), matchers etc.',
        'think about docker orchestration kubernetes',
        'add other utility functions to manipulate dates and review sites for useful utilities and how they would be matched, organized and found',
        'build semi complex examples with arrays, if/foreach/ boolean and cross-language and create crawk',
        'think about webui and seo friendly way of finding functions/recipies/examples etc.',
    ],

    'crawk?'              => [
        'awk on CRACK. CRAWK!',
        'functionshub.com -- fh',
    ],

    'inv differentiators' => [
        '.g publishing services',
        'api managers 3scale, mashery, mashape api marketplace',
        'nanopay',
        'protocol buffers',
        'review api evangelist blog',
        'future of github',
        'focus on $ ',
        'review nanopay, aws closures',
        'inv aws vm hosting',
        'inv message passing',
    ]

];

?>