<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
* Rotta per effettuare il login
*/
Route::get('/', function () {
    return view('login');

});

/*
* Rotta per ottenere la lista delle birrerie
*/
Route::get('/breweries', function () {
    return view('breweries'); 
});
