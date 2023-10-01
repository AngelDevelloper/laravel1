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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware(['cors'])->group(function () {
    Route::get('/articulos', 'App\Http\Controller\ArticuloController@index');
Route::post('/articulos', 'App\Http\Controller\ArticuloController@store');
Route::put('/articulos/{id}', 'App\Http\Controller\ArticuloController@update');
Route::delete('/articulos/{id}', 'App\Http\Controller\ArticuloController@destroy');
});

