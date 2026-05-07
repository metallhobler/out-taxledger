<?php
/*
 *  Menu Configuration
 */
return [
    'out-taxledger' => [
        'name' => 'menu-entry-name',
        'label' => 'Testmenu OUT',
        'plural' => true,
        'icon' => 'fas fa-certificate',
        'route_segment' => 'out-taxledger',
        'permission' => 'outtaxledger.personalminingtaxview',
        'entries' => [
            [
                'name' => 'out-taxledger-home-sub-menu',
                'label' => 'Mining Tax',
                'icon' => 'fas fa-home',
                'route' => 'out-taxledger.miningtax',
                'permission' => 'outtaxledger.personalminingtaxview'
            ],
            [
                'name' => 'out-taxledger-home-mining-log',
                'label' => 'Ratting Tax',
                'icon' => 'fas fa-table',
                'route' => 'out-taxledger.rattingtax',
                'permission' => 'outtaxledger.corprattingtaxview'
            ],
        ],
    ],
];