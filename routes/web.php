
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/francauxach', function () {
    return view('francauxach');
});

Route::get('/sergi', function () {
    return view('sergi');
});

Route::get('/davidmartinez', function () {
    return view('davidmartinez');
});

Route::get('/manelgavalda', function () {
    return view('manelgavalda');
});

Route::get('/manuelblanch', function () {
    return view('manuelblanch');
});

Route::get('/cristianfonolla', function () {
    return view('cristianfonolla');
});

Route::get('/pedro', function () {
    return view('pedro');
});

Route::get('/rogerforne', function () {
    return view('rogerforne');
});