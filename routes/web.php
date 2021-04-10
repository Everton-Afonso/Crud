<?php

use App\Http\Controllers\CadastroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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


Route::get('/', [CadastroController::class, 'index'])->name('products');

Route::get('products/insert', [CadastroController::class, 'create'])->name('products.get.insert');

Route::get('products/{id}', [CadastroController::class, 'show'])->name('products.get.show');

Route::post('products', [CadastroController::class, 'insert'])->name('products.post.insert');

Route::get('products/{carro}/edit', [CadastroController::class, 'edit'])->name('products.get.edit');

Route::put('products/{carro}', [CadastroController::class, 'editar'])->name('products.put.editar');

Route::get('products/{carro}/delete', [CadastroController::class, 'deleteItem'])->name('products.get.deleteItem');

Route::delete('products/{carro}', [CadastroController::class, 'deletar'])->name('products.delete.deletar');