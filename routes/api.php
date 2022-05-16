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

Route::apiResource('contatos',\App\Http\Controllers\Api\ContatoController::class);

Route::apiResource('contatos.produtos',\App\Http\Controllers\Api\ProdutoController::class)
    ->only(['index']);
Route::apiResource('produtos',\App\Http\Controllers\Api\ProdutoController::class);