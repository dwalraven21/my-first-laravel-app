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
// For single page application - routes are handled with js so we want to use a wild card here to deliver our welcome page for everypage.
Route::get('/{any?}', function () {
    return view('welcome');
});
