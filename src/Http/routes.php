<?php

Route::group([
    'namespace'  => 'metallhobler\Seat\OUTTaxLedger\Http\Controllers',
    'middleware' => ['web', 'auth', 'locale'],
], function () {
    Route::prefix('/out-taxledger')
        ->group(function () {

            Route::get('/')
                ->name('seat-outsmarted::home');
                ->uses('SeatOutsmartedController@index');

            Route::get('/miningtax')
                ->name('seat-outsmarted::miningtax');
                //->uses('CorpMiningLog@index');

            Route::get('/corprat')
                ->name('seat-outsmarted::corprat');
                //->uses('CorpMiningLog@index');

            Route::get('/alliancerat')
                ->name('seat-outsmarted::alliancerat');
                //->uses('CorpMiningLog@index');

            Route::get('/settings')
                ->name('seat-outsmarted::settings');
                //->uses('CorpMiningLog@index');
        });
});