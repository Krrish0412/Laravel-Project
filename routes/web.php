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
Route::get('/adminverify',function() {
         return view('layout.adminverify');
});
Route::get('/admin',function() {
       return view('layout.admin');
});
Route::get('/crete',function(){
    return view('layout.crete');
});
Route::get('/newuser',function(){
          return view('layout.newuser');
});
Route::get('/pchange',function(){
    return view('layout.pachange');
});
Route::get('/profile',function(){
    return view('layout.profile');
});
Route::get('/forgetid',function(){
    return view('layout.forgetid');
});
Route::get('/update',function(){
    return view('layout.update');
});
Route::get('/passforget',function(){
    return view('layout.passforget');
});
Route::get('/passreset',function(){
    return view('layout.passreset');
});
Route::get('/account',function(){
    return view('layout.account');
});
Route::resource('ibanks','VsController');
Route::resource('banks','BankController');
Route::resource('pro','NewController');

Route::get('/log',function() {
    return view('layout.logn');
});
Auth::routes();