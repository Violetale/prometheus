<?php

Route::group(['middleware' => ['web']], function () {

    /* Admin */

    Route::group([
        'prefix' => 'admin',
        'namespace' => 'Violetale\Prometheus\Http\Controllers\Admin',
        'as' => 'admin.',
    ], function () {
    Route::get('/')->name('admin');
    });



});
