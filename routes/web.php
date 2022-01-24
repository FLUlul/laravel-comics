<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'ComicsController@comicsFun')->name('comics');

Route::get('comic-detail', 'ComicsController@comicFun')->name('comic');
