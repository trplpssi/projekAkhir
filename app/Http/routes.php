<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('homepage');
});

/* ================== Homepage + Admin Routes ================== */

require __DIR__.'/admin_routes.php';

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/proyek', 'ProyekController@index');

Route::get('/detailproyek', function () {
    return view('DetailProyek');
});
