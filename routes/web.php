<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * send all get requests into the main view.
 */
Route::get('/{any}', function () {
    return view('main');
})->where('any', '.*');

Auth::routes();

/**
 * Routes available for admins only
 */
Route::middleware(['role:admin', 'auth'])->group(function () {

});