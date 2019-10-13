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


Route::resource('/kategori_artikel','kategori_artikel_controller');
Route::resource('/kategori_berita','kategori_berita_controller');
Route::resource('/kategori_galeri','kategori_galeri_controller');
Route::resource('/kategori_pengumuman','kategori_pengumuman_controller');
Route::resource('/artikel','artikel_controller');
Route::resource('/berita','berita_controller');
Route::resource('/galeri','galeri_controller');
Route::resource('/pengumuman','pengumuman_controller');
