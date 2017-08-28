<?php

$todos = [

    'todos'     => [
        'top' => [

            'next' => [


                'pick next tickets',


                'next week' => [
                    // TODO(hbt) NEXT fix recently added bookmark commands  -- view commit checklist
                    'https://github.com/hbt/mouseless/issues/126',
                ],
            ],

        ],
    ],

    'checklist' => [
        'weekly checklist'     => [

            'check new changes from main repo worth having' => [
                'review forks in network -- last count 141',
                'review commits + merge ',

                'merging checklist' => [
                    'check original fork' => [
                        'git co 1995',
                        'git pull git://github.com/1995eaton/chromium-vim.git master',
                        'git log dev..chromium-vim',
                        'review and merge',
                    ],
                    'merge pull requests' => [
                        'checkout ',
                        'examples' => [
                            'fetch e.g git pull git://github.com/rosshadden/mouseless.git fix/editing-divs',
                            'tarao' => [
                                'g co -b tarao',
                                'git pull git://github.com/tarao/chromium-vim.git tarao:tarao',
                            ],
                        ],
                        'merge in dev',
                        'notify author',
                        'update changelog',
                        'add to docs/thanks',
                        'update docs/commands',
                        './scripts/generate-docs',
                    ],
                ],
            ],
        ],

        'new commit checklist' => [
            'issue is elimnated and cannot be reopened',
            'commit on dev',
            'commit msg contains ticket number',
            'update commands.adoc/settings.adoc',
            'update changelog',
            './scripts/generate-docs',
            'review diff',
            'push',
            'close ticket',
        ],

        'releease checklist'   => [
            '. edit manifest.json and update version',
            '. update changelog.adoc',
            ' render all adoc files',
            ' ./scripts/release.sh 1.3.0',
//        https://hbt.github.io/mouseless/tips.html#_how_to_do_a_release',
        ],

    ],
];
?>