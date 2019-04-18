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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/bolzano-classic-sessel', 'StaticItemController@index')->name('staticItem');


//// Home page
//Route::get('/', [
//    'as'      => 'home',
//    'uses'    => 'PageController@index'
//]);

// Catch all page controller (place at the very bottom)
Route::get('{slug}', [
    'uses' => 'PageController@getPage'
])->where('slug', '([A-Za-z0-9\-\/]+)');


