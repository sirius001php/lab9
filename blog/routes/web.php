<?php


Route::get('/', function () {
    return view('main');
})->name('home');
Route::get('/about_me', function () {
    return view('about_me');
})->name('me');
Route::get('/registratio', function () {
    return view('registratio');
})->name('register');
Route::post('/registratio/submit', 'RegController@submit')->name('register-form');
Route::get('/registratio/allmassege', 'RegController@allInfo')->name('all-info');
Route::get('/registratio/one-massege/{id}', 'RegController@oneInfo')->name('one-info');

// Виклик цієї функції після викон. основної
//іменоване відстеження юерел адресів це називається
