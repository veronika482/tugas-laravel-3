<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(); 

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('my-captcha', 'HomeController@myCaptcha')->name('myCaptcha');

Auth::routes();

Route::post('my-captcha', 'HomeController@myCaptchaPost')->name('myCaptcha.post');

Auth::routes();

Route::get('refresh_captcha', 'HomeController@refreshCaptcha')->name('refresh_captcha');
