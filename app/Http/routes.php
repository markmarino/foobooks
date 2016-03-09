<?php

use \Rych\Random\Random;

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return 'What\'s up, friend? Welcome to my Laravel application.';
    });

    Route::get('/books', 'BookController@getIndex');
    Route::get('/book/create', 'BookController@getCreate');
    Route::post('/book/create', 'BookController@postCreate');
    Route::get('/book/{id}', 'BookController@getShow');

    Route::get('/practice/debugbar', function() {
        $data = Array('foo' => 'bar');
        Debugbar::info($data);
        Debugbar::error('Error!');
        Debugbar::warning('Watch out…');
        Debugbar::addMessage('Another message', 'mylabel');

        return 'Practice';
    });
    Route::get('/practice/random', function() {

        $random = new Random();
        return $random->getRandomString(8);

    });
});
