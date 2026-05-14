<?php

Route::group([
    'namespace'  => 'metallhobler\Seat\OUTTaxLedger\Http\Controllers',
    'middleware' => ['web', 'auth', 'locale'],
], function () {
    Route::prefix('/outsmarted')
        ->group(function () {

            Route::get('/')
                ->name('seat-outsmarted::home')
                ->uses('SeatOutsmartedController@index');

            Route::get('/miningtax')
                ->name('seat-outsmarted::miningtax')
                ->uses('SeatOutsmartedController@miningtax');

            Route::get('/corprat')
                ->name('seat-outsmarted::corprat')
                ->uses('SeatOutsmartedController@corprat');

            Route::get('/alliancerat/{year?}/{month?}')
                ->name('seat-outsmarted::alliancerat')
                ->uses('SeatOutsmartedController@getBountyPrizesByMonth');

            Route::get('/settings')
                ->name('seat-outsmarted::settings')
                ->uses('SeatOutsmartedController@settings');

        });
});