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

// Route::get('/', function () {
//     return view('auth.login');
// });


Route::group(['prefix' => '/'], function()
{
    if ( Auth::check() ) // use Auth::check instead of Auth::user
    {
        Route::get('/', 'auth.login');
    } else{
       // Route::get('/', 'HomeController@index')->name('home');
    }
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
