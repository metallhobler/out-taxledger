<?php

Route::group([
    'namespace'  => 'metallhobler\Seat\OUTTaxLedger\Http\Controllers',
    'middleware' => ['web', 'auth', 'locale'],
], function () {
    Route::prefix('/out-taxledger')
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

            Route::get('/alliancerat')
                ->name('seat-outsmarted::alliancerat')
                ->uses('SeatOutsmartedController@alliancerat');

            Route::get('/settings')
                ->name('seat-outsmarted::settings')
                ->uses('SeatOutsmartedController@settings');
                
        });
});