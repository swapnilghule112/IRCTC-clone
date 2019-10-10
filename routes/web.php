<!-- @author: Swapnil Ghule -->
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/home' , "home");
Route::post('/UserController' , "UserController@check_availability" );

Route::get('/tickets','TicketController@index');

Route::get('/ticket/create','TicketController@create');

Route::post('/ticket','TicketController@storeTicket');
