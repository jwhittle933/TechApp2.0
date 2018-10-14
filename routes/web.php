<?php

Route::get('/', 'IndexController@index');
Route::get('/reportform', 'ReportFormController@index');
Route::get('/login', 'LoginController@index');
Route::get('/requestmanager', 'RequestsController@index');
Route::post('/requestmanager', 'RequestsController@submit');
Route::get('/requestmanager/{request}', 'RequestsController@show');
