<?php

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
    return view('welcome');
});

Route::get('/login', ['uses'=>'logincontroller@index'] );
//Route::get('/login', [logincontroller::class, 'index'] );


Route::post('/login','logincontroller@verify') ;

Route::get('/register', function () {
    echo "Welcome to signup page";
});


Route::get('/home','homecontroller@index') ;
Route::get('/logout','logoutcontroller@index');

Route::get('/Create','createusercontroller@index');
Route::get('/List','createusercontroller@create');
//Route::get('/List','createusercontroller@create');
//Route::get('/List','createusercontroller@index');

Route::get('/back','createusercontroller@back');
 
 