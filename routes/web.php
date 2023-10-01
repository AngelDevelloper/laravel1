<?php

use Illuminate\Support\Facades\Route;

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
   // return view('welcome');
   $response = Http::get("https://gateway.marvel.com:443/v1/public/characters?ts=1&apikey=45513d1d1d5375897967bdea82adadcd&hash=ea62b4a50be99d185de6213bfbf38d65");
   dd($response->json());
});

Route::get('/heroes', function () {
    $response = Http::get("https://gateway.marvel.com:443/v1/public/characters?ts=1&apikey=45513d1d1d5375897967bdea82adadcd&hash=ea62b4a50be99d185de6213bfbf38d65");
    $characters = $response->json()['data']['results'];

    return view('heroes', ['characters' => $characters]);
});


