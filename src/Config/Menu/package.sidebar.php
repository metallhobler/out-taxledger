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
                'name' => 'all outsmarted',
                'label' => 'Mining Tax',
                'icon' => 'fab fa-fort-awesome',
                'route' => 'seatcore::alliance.list',
                'permission' => 'out-taxledger.miningtaxview',
            ],
            [
                'name' => 'all outsmarted',
                'label' => 'Corp Ratting',
                'icon' => 'fab fa-fort-awesome',
                'route' => 'seatcore::alliance.list',
                'permission' => 'out-taxledger.corprattingtaxview',
            ],
            [
                'name' => 'all outsmarted',
                'label' => 'Alliance Ratting',
                'icon' => 'fab fa-fort-awesome',
                'route' => 'seatcore::alliance.list',
                'permission' => 'out-taxledger.alliancerattingtaxview',
            ],
            [
                'name' => 'all outsmarted',
                'label' => 'Settings',
                'icon' => 'fab fa-fort-awesome',
                'route' => 'seatcore::alliance.list',
                'permission' => 'out-taxledger.settings',
            ],
        ],
    ],
];