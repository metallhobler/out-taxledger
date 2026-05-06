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
        'entries' => [
            [
                'name' => 'out-taxledger-home-sub-menu',
                'label' => 'out-taxledger::menu.sub-home-level',
                'icon' => 'fas fa-home',
                'route' => 'out-taxledger.home',
                'permission' => 'out-taxledger.view'
            ],
            [
                'name' => 'out-taxledger-home-mining-log',
                'label' => 'out-taxledger::menu.sub-mining-log',
                'icon' => 'fas fa-table',
                'route' => 'out-taxledger.logbook',
                'permission' => 'out-taxledger.view'
            ],
        ],
    ],
];