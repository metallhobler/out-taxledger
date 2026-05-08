<?php
/*
 *  Menu Configuration
 */
return [
    'outsmarted' => [
        'name' => 'outsmarted',
        'label' => 'OUTsmarted',
        'plural' => true,
        'icon' => 'fas fa-city',
        'route_segment' => 'outsmarted',
        'permission' => 'out-taxledger.generalmenu',
        'entries' => [
            [
                'name' => 'out-taxledger-miningtax',
                'label' => 'Mining Tax',
                'icon' => 'fab fa-fort-awesome',
                'route' => 'out-taxledger.miningtax',
                'permission' => 'out-taxledger.miningtaxview',
            ],
            [
                'name' => 'out-taxledger-corprat',
                'label' => 'Corp Ratting',
                'icon' => 'fab fa-fort-awesome',
                'route' => 'out-taxledger.corprat',
                'permission' => 'out-taxledger.corprattingtaxview',
            ],
            [
                'name' => 'out-taxledger-alliancerat',
                'label' => 'Alliance Ratting',
                'icon' => 'fab fa-fort-awesome',
                'route' => 'out-taxledger.alliancerat',
                'permission' => 'out-taxledger.alliancerattingtaxview',
            ],
            [
                'name' => 'out-taxledger-settings',
                'label' => 'Settings',
                'icon' => 'fab fa-fort-awesome',
                'route' => 'out-taxledger.settings',
                'permission' => 'out-taxledger.settings',
            ],
        ],
    ],
];