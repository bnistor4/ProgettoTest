<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BreweryController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


/*
* Rotta per effettuare il login
*/
Route::post('/login', [AuthController::class, 'login']);

/*
* Rotta per ottenere la lista delle birrerie
*/
Route::middleware('auth:sanctum')->get('/breweries', [BreweryController::class, 'index']);

