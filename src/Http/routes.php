<?php

Route::group([
    'namespace'  => 'metallhobler\Seat\OUTTaxLedger\Http\Controllers',
    'middleware' => ['web', 'auth', 'locale'],
], function (): void {

    // Your route definitions go here.
    Route::get('/outsmarted/taxledger', [
        'as'   => 'out-taxledger.index',
        'uses' => 'AllianceStructureController@index'
    ]);

});