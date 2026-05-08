<?php
/*
 *  Menu Configuration
 */
return [
    'out-taxledger' => [
        'name' => 'home',
        'label' => 'Test 1',
        'icon' => 'fas fa-home',
        'route_segment' => 'home',
        'route' => 'seatcore::home',
    ],
    'out-taxledger2' => [
        'name' => 'alliance',
        'label' => 'Test 2',
        'plural' => true,
        'icon' => 'fas fa-city',
        'route_segment' => 'test3',
        'permission' => 'out-taxledger.personalminingtaxview',
        'entries' => [
            [
                'name' => 'all test3',
                'label' => 'Test 3',
                'icon' => 'fab fa-fort-awesome',
                'route' => 'seatcore::alliance.list',
                'permission' => 'out-taxledger.corprattingtaxview',
            ],
        ],
    ],
];