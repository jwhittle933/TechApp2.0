<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('/rooms', 'RoomsController',[
    'except' => ['edit', 'show', 'store', 'create']
]);
Route::resource('/problems', 'ProblemsController', [
    'except' => ['edit', 'show', 'store', 'create']
]);
Route::resource('/suggestions', 'SuggestionsController', [
    'except' => ['edit', 'show', 'store', 'create']
]);
Route::resource('/solution', 'SolutionController',[
    'except' => ['edit', 'show', 'store', 'create']
]);
Route::resource('/logout', 'LogOutController@logout',[
    'except' => ['edit', 'show', 'store', 'create']
]);