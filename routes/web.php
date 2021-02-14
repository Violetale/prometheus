<?php

Route::group(['middleware' => ['web']], function () {

    /* User */

    Route::group([
        'prefix' => 'admin',
        'namespace' => 'Violetale\Prometheus\Http\Controllers\User',
        'as' => 'admin.',
    ], function () {

//        /*Login*/
//        Route::group(function () {
//            Route::get('/login', 'LoginController@showLoginForm')->name('login');
//            Route::post('/login', 'LoginController@login')->name('login.submit');
//        });
        /*Auth*/

        Route::get('/', 'LoginController@login')->name('admin');
        Route::post('/logout', 'LoginController@logout')->name('logout');

        /*Dashboards*/

        Route::resource('dashboards', 'DashboardController');
    });

    /*UI*/

});
