<?php

Route::get('/', 'IndexController@index');
Route::get('/reportform', 'ReportFormController@index');
Route::get('/login', 'LoginController@index');
Route::get('/requestmanager', 'RequestManagerController@index');
