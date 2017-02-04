<?php

$todos = [
    'top'                                           => [

        'next' => [

            'fix review below',
            'fix TODOs left in code + docs',
// TODO(hbt) NEXT migrate commands from config such as copyDescription -- custom functions as new commands + log ticket


            'next week' => [

            ],
        ],

    ],

    'weekly checklist'                              => [
        'review forks -- last count 119',
        'review commits + merge ',
        'merge' => [
            'checkout ',
            'fetch e.g git pull git://github.com/rosshadden/mouseless.git fix/editing-divs',
            'merge in dev',
            'notify author',
            'update changelog',
            'add to docs/thanks',
            'update docs/commands',
        ],
    ],

    'review this stuff ... some of it already done' => [

        'new branches'                                                       => [
            'create master / dev -- master = stable, dev = active dev',
            'create google-store branch .. without the chrome// stuff',
            'document branches',
        ],
        'polish existing features implementation',
        'get contributors to spread maintenance load + generate serependity' => [
            'improve documentation'                        => [
                'fix readme',
                'add help page listing commands and descriptions',
                'add wiki for examples of css cvim, configs, custom functions, website configurations,',
                'get github-pages' => [
                    'what is it',
                    'targeted audience at this stage',
                    'alternatives',
                    'commands',
                    'how to contribute' => [
                        'answer user questions',
                        'pull requests',
                        'spread the word to the right audience',
                    ],
                    'wiki',
                    'faq',
                ],
                'create releases - zip files / tag for easy download',
            ],

            'contact watchers / forkers / pull requesters' => [

            ],
        ],
    ],
];
?>