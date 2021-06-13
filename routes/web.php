<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UserController;

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
Route::get('/home',function(){
    return view('home');
});
Route::get('/login',function(){
    return view('login');
});

// Route::get('/user',function(){
//     return view('user');
// });

 Route::get('/user',[UserController::class,'index']);
//Route::get('/user','UserController@index');
//Route::get('/user', 'App\Http\Controllers\Controller@index');

