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


Route::get('/kategori_artikel','kategori_artikel_controller@index')->name('kategori_artikel.index');
Route::get('/kategori_artikel/create','kategori_artikel_controller@create')->name('kategori_artikel.create');
Route::post('/kategori_artikel','kategori_artikel_controller@store')->name('kategori_artikel.store');
Route::get('/kategori_artikel/{id}','kategori_artikel_controller@show')->name('kategori_artikel.show');

Route::get('/kategori_berita','kategori_berita_controller@index')->name('kategori_berita.index');
Route::get('/kategori_berita/create','kategori_berita_controller@create')->name('kategori_berita.create');
Route::post('/kategori_berita','kategori_berita_controller@store')->name('kategori_berita.store');
Route::get('/kategori_berita/{id}','kategori_berita_controller@show')->name('kategori_berita.show');

Route::get('/kategori_galeri','kategori_galeri_controller@index')->name('kategori_galeri.index');
Route::get('/kategori_galeri/create','kategori_galeri_controller@create')->name('kategori_galeri.create');
Route::post('/kategori_galeri','kategori_galeri_controller@store')->name('kategori_galeri.store');
Route::get('/kategori_galeri/{id}','kategori_galeri_controller@show')->name('kategori_galeri.show');


Route::get('/kategori_pengumuman','kategori_pengumuman_controller@index')->name('kategori_pengumuman.index');
Route::get('/kategori_pengumuman/create','kategori_pengumuman_controller@create')->name('kategori_pengumuman.create');
Route::post('/kategori_pengumuman','kategori_pengumuman_controller@store')->name('kategori_pengumuman.store');
Route::get('/kategori_pengumuman/{id}','kategori_pengumuman_controller@show')->name('kategori_pengumuman.show');

Route::get('/artikel','artikel_controller@index')->name('artikel.index');
Route::get('/artikel/create', 'artikel_controller@create')->name('artikel.create');
Route::post('/artikel', 'artikel_controller@store')->name('artikel.store');
Route::get('/artikel/{id}', 'artikel_controller@show')->name('artikel.show');

Route::get('/berita','berita_controller@index')->name('berita.index');
Route::get('/berita/create', 'berita_controller@create')->name('berita.create');
Route::post('/berita', 'berita_controller@store')->name('berita.store');
Route::get('/berita/{id}', 'berita_controller@show')->name('berita.show');

Route::get('/galeri','galeri_controller@index')->name('galeri.index');
Route::get('/galeri/create', 'galeri_controller@create')->name('galeri.create');
Route::post('/galeri', 'galeri_controller@store')->name('galeri.store');
Route::get('/galeri/{id}', 'galeri_controller@show')->name('galeri.show');

Route::get('/pengumuman','pengumuman_controller@index')->name('pengumuman.index');
Route::get('/pengumuman/create', 'pengumuman_controller@create')->name('pengumuman.create');
Route::post('/pengumuman', 'pengumuman_controller@store')->name('pengumuman.store');
Route::get('/pengumuman/{id}', 'pengumuman_controller@show')->name('pengumuman.show');
