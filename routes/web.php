<?php

Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::post('/', 'Auth\LoginController@login');
Route::view('/', 'signin')->middleware('guest')->name('login');

Route::get('home', 'UpdateController@index')->name('home');
Route::get('/updates', 'UpdateController@list');
Route::post('/updates', 'UpdateController@create');
Route::get('/updates/suggestions', 'UpdateController@userSuggestions');

