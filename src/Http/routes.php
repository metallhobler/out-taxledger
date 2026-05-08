<?php

Route::group([
    'namespace'  => 'metallhobler\Seat\OUTTaxLedger\Http\Controllers',
    'middleware' => ['web', 'auth', 'locale'],
], function () {
    Route::prefix('/out-taxledger')
        ->group(function () {

            Route::get('/')
                ->name('out-taxledger.home')
                ->uses('CorpMiningOverviewController@getHome');

            Route::get('/miningtax')
                ->name('out-taxledger.miningtax')
                ->uses('CorpMiningLog@index');

            Route::get('/corprat')
                ->name('out-taxledger.corprat')
                ->uses('CorpMiningLog@index');

            Route::get('/alliancerat')
                ->name('out-taxledger.alliancerat')
                ->uses('CorpMiningLog@index');
                
            Route::get('/settings')
                ->name('out-taxledger.settings')
                ->uses('CorpMiningLog@index');
        });
});