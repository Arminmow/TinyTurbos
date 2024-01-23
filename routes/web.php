<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[
    'uses' => '\App\Http\Controllers\HomeController@index',
    'as' => 'home'
]);

// Sign up
Route::get('/signup',[
    'uses' => '\App\Http\Controllers\AuthController@getSignup',
    'as' => 'auth.signup'
]);

Route::post('/signup',[
    'uses' => '\App\Http\Controllers\AuthController@postSignup',
]);

// Sign in
Route::get('/signin',[
    'uses' => '\App\Http\Controllers\AuthController@getSignin',
    'as' => 'auth.signin'
]);

Route::post('/signin', [
    'uses' => '\App\Http\Controllers\AuthController@postSignin'
]);

// Sign out
Route::get('/signout',[
    'uses' => '\App\Http\Controllers\AuthController@signout',
    'as' => 'auth.signout'
]);

// Add Product
Route::get('/addProduct',[
    'uses' => '\App\Http\Controllers\HomeController@getAddProduct',
    'as' => 'product.add'
]);

Route::post('/addProduct',[
    'uses' => '\App\Http\Controllers\HomeController@postAddProduct',
]);
