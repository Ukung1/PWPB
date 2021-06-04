<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Create
Route::get('/employee/create', 'App\Http\Controllers\TableController@create')->name('employee.create');
Route::post('/employee', 'App\Http\Controllers\TableController@store')->name('employee.store');
//Edit
Route::get('/employee{employee}', 'App\Http\Controllers\TableController@edit')->name('employee.edit');
Route::patch('/employee{employee}', 'App\Http\Controllers\TableController@update')->name('employee.update');
//Delete
Route::delete('/employee{employee}', 'App\Http\Controllers\TableController@destroy')->name('employee.destroy');
