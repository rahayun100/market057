<?php

use Illuminate\Http\Request;

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

//route menuju controllerProduk
Route::get('/Market','ProdukController@index')->name('task.index');
Route::get('/Market/{id}','ProdukController@show')->name('task.show');
Route::delete('/Market/{id}','ProdukController@destroy')->name('task.destroy');
Route::post('/Market/','ProdukController@store')->name('task.store');
Route::patch('/Market/{id}','ProdukController@update')->name('task.update');
