<?php
Route::get('/', 'IndexController@index');
Route::get('/reportform', 'ReportFormController@index');
Route::post('/reportform', 'ReportFormController@submit');
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::post('/login/access', 'LoginController@access');
Route::get('/logout', 'LogOutController@logout');
Route::get('/dashboard', 'DashboardController@index');
Route::post('/dashboard', 'DashboardController@store');
Route::get('/dashboard/{request}', 'DashboardController@show');
Route::delete('/dashboard/{id}', 'DashboardController@destroy');
Route::patch('/dashboard/{id}', 'DashboardController@update');
Route::get('/profile', 'ProfileController@index');
Route::get('/classroominfo', 'ClassroomInfoController@index');
Route::get('/newuser', 'NewUserController@index');
Route::post('/newuser', 'NewUserController@add');