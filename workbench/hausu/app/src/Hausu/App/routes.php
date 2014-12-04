<?php
/**
 * Define routes for app.hausu.co.uk
 */

Route::group(['domain' => 'app.hausu.app'], function() {
	Route::get('/', 'Hausu\App\Controllers\IndexController@getIndex');
	Route::get('/dashboard/', 'Hausu\App\Controllers\DashboardController@getIndex');
	Route::post('/login/', 'Hausu\App\Controllers\LoginController@postIndex');
});