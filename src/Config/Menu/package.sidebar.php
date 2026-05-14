<?php
/*
 *  Menu Configuration
 */
return [
    'outsmarted' => [
        'name' => 'outsmarted',
        'label' => 'OUTSmarted',
        'plural' => true,
        'icon' => 'fas fa-city',
        'route_segment' => 'outsmarted',
        'permission' => 'out-taxledger.generalmenu',
        'entries' => [
            [
                'name' => 'out-taxledger-home',
                'label' => 'Home Sweet Home',
                'icon' => 'fab fa-fort-awesome',
                'route' => 'seat-outsmarted::home',
                'permission' => 'out-taxledger.generalmenu',
            ],
            [
                'name' => 'out-taxledger-miningtax',
                'label' => 'Mining Tax',
                'icon' => 'fab fa-fort-awesome',
                'route' => 'seat-outsmarted::miningtax',
                'permission' => 'out-taxledger.miningtaxview',
            ],
            [
                'name' => 'out-taxledger-corprat',
                'label' => 'Corp Ratting',
                'icon' => 'fab fa-fort-awesome',
                'route' => 'seat-outsmarted::corprat',
                'permission' => 'out-taxledger.corprattingtaxview',
            ],
            [
                'name' => 'out-taxledger-alliancerat',
                'label' => 'Alliance Ratting',
                'icon' => 'fab fa-fort-awesome',
                'route' => 'seat-outsmarted::alliancerat',
                'permission' => 'out-taxledger.alliancerattingtaxview',
            ],
            [
                'name' => 'out-taxledger-settings',
                'label' => 'Settings',
                'icon' => 'fab fa-fort-awesome',
                'route' => 'seat-outsmarted::settings',
                'permission' => 'out-taxledger.settings',
            ],
        ],
    ],
];