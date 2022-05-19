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
use App\Http\Controllers\Api\ProdutoController;
use App\Http\Controllers\Api\ContatoController;




Route::get('/produtos', [ProdutoController::class, 'GetProduto']);
Route::get('/produtos/{id}', [ProdutoController::class, 'GetProdContatoId']);
Route::get('/NovoProduto', [ProdutoController::class, 'AdicionarProd']);

Route::get('/AlteraProd/{id}/edit', [ProdutoController::class, 'Edit']);
Route::post('/produtos/alterar/{id}', [ProdutoController::class, 'Alterar']);
Route::delete('/produtos/delete/{id}', [ProdutoController::class, 'Delete']);


Route::post('/NovoProduto', [ProdutoController::class, 'CriaProduto']);



Route::get('/', [ContatoController::class, 'GetContato']);
Route::get('/NovoContato', [ContatoController::class, 'AdicionaContato']);
Route::post('/NovoContato', [ContatoController::class, 'CriaContato']);
Route::get('/AlteraContato/{id}/edit', [ContatoController::class, 'Edit']);
Route::post('/contato/alterar/{id}', [ContatoController::class, 'Alterar']);
Route::delete('/contatos/delete/{id}', [ContatoController::class, 'Delete']);
