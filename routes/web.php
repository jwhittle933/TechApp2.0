<?php
Route::get('/', 'IndexController@index');
Route::get('/reportform', 'ReportFormController@index');
Route::post('/reportform', 'ReportFormController@submit');
Route::auth();
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LogOutController@logout');
Route::get('/requestmanager', 'RequestsController@index');
Route::post('/requestmanager', 'RequestsController@store');
Route::get('/requestmanager/{request}', 'RequestsController@show');
Route::delete('/requestmanager/{id}', 'RequestsController@destroy');
Route::patch('/requestmanager/{id}', 'RequestsController@update');
Route::get('/profile', 'ProfileController@index');
Route::get('/classroominfo', 'ClassroomInfoController@index');
Route::get('/newuser', 'NewUserController@index');