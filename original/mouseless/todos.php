<?php

$todos = [
    'top'                                           => [

        'next' => [
            '72',
            '80',
            '76',

            'pick next tickets',


            'next week' => [

            ],
        ],

    ],

    'weekly checklist'                              => [
        'review forks -- last count 119',
        'review commits + merge ',
        'check original fork' => [
            'git co 1995',
            'git pull git://github.com/1995eaton/chromium-vim.git master',
            'git log dev..chromium-vim',
            'review and merge',
        ],
        'merge pull requests' => [
            'checkout ',
            'fetch e.g git pull git://github.com/rosshadden/mouseless.git fix/editing-divs',
            'merge in dev',
            'notify author',
            'update changelog',
            'add to docs/thanks',
            'update docs/commands',
            'asciidocs',
        ],
    ],

    'commit checklist' => [
        'issue is elimnated and cannot be reopened',
        'commit on dev',
        'commit msg contains ticket number',
        'update commands.adoc/settings.adoc',
        'update changelog',
        'asciidocs',
        'review diff',
        'push',
        'close ticket',
    ],

];
?>