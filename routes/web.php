<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customauthcontroller;

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

Route::get('/login' , [customauthcontroller::class, 'login'])->middleware('alreadyLoggedIn');
Route::get('/registration' , [customauthcontroller::class, 'registration'])->middleware('alreadyLoggedIn');
Route::post('/register-user', [customauthcontroller::class,'registerUser'])->name('register-user');
// login route aditya
Route::post('login-user', [customauthcontroller::class,'loginUser'])->name('login-user');
Route::get('/dashboard' , [customauthcontroller::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/logout' , [customauthcontroller::class,'logout']);
// Route::get('/welcome' , [customauthcontroller::class,'welcome']);