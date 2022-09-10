<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('home');

});

/*Route::get('/contact', function(){
   return view('contactformulier');
});*/
Route::get('/contact', 'App\Http\Controllers\FrontendController@contact')->name('contact');
Route::get('/overons', 'App\Http\Controllers\FrontendController@overons')->name('overons');
Route::get('/projecten', 'App\Http\Controllers\FrontendController@projecten')->name('projecten');
Route::get('/werkwijze', 'App\Http\Controllers\FrontendController@werkwijze')->name('werkwijze');
Route::get('/home', 'App\Http\Controllers\FrontendController@home')->name('home');


/*** BACKEND ROUTES***/
Route::group(['prefix' => 'admin', 'middleware'=> ['auth','verified']], function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified')->name('homebackend');


});
