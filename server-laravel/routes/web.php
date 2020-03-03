<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('quests')->group(function () {
    Route::get('', 'QuestController@index');
    Route::post('', 'QuestController@store');
    Route::get('{quest}', 'QuestController@show');
    Route::put('{quest}', 'QuestController@update');
    Route::delete('{quest}', 'QuestController@destroy');
});
