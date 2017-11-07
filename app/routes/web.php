<?php


Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', 'HomeController@index')->name('home');

    Route::resources([
        'dictionaries' => 'DictionaryController',
        'words' => 'WordController'
    ]);



});
