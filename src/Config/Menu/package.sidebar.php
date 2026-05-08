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
    'alliance' => [
        'name' => 'alliance',
        'label' => 'Test 2',
        'plural' => true,
        'icon' => 'fas fa-city',
        'route_segment' => 'alliances',
        'entries' => [
            [
                'name' => 'all alliances',
                'label' => 'Test 3',
                'icon' => 'fab fa-fort-awesome',
                'route' => 'seatcore::alliance.list',
            ],
        ],
    ],
];