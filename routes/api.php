<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('/rooms', 'RoomsController');
Route::resource('/problems', 'ProblemsController');
Route::resource('/suggestions', 'SuggestionsController');
Route::resource('/solution', 'SolutionController');
Route::resource('/logout', 'LogOutController');