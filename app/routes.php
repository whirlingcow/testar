<?php

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@getIndex'));

Route::get('/login', array('as' => 'login', 'uses' => 'AuthController@getLogin'));

Route::post('login', array('uses' => 'AuthController@postLogin'));