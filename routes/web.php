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
    return view('home');
});

Route::get('/login-user', function (){
    return view('Applicant/login-applicant');
});

Route::get('/login-company', function (){
    return view('Company/login-company');
});

Route::get('/sugestao', function (){
    return view('Suggestion/suggestion');
});
