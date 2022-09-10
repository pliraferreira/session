<?php

use App\Http\Controllers\CarrinhoController;
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
    return view('welcome');
});

Route::get('/carrinho/list', [CarrinhoController::class, 'list']);
Route::get('/carrinho/add', [CarrinhoController::class, 'add']);
Route::get('/carrinho/remove', [CarrinhoController::class, 'remove']);