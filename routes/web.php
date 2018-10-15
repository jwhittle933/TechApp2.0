<?php

Route::get('/', 'IndexController@index');

Route::get('/reportform', 'ReportFormController@index');
Route::post('/reportform', 'ReportFormController@submit');

Route::get('/login', 'LoginController@index');

Route::get('/requestmanager', 'RequestsController@index');
Route::get('/requestmanager/{request}', 'RequestsController@show');
Route::delete('/requestmanager/delete', 'RequestsController@delete');
Route::patch('/requestmanager/update', 'RequestsController@update');
Route::post('/requestmanager', 'RequestsController@submit');


