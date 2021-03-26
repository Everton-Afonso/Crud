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


Route::get('/', [CadastroController::class, 'index'])->name('produtos');

Route::get('produtos/inserir', [CadastroController::class, 'create'])->name('cadastrar');

Route::get('produtos/{id}', [CadastroController::class, 'show'])->name('descricao');

Route::post('produtos', [CadastroController::class, 'insert'])->name('insert');

Route::get('produtos/{carro}/edit', [CadastroController::class, 'edit'])->name('edit');

Route::put('produtos/{carro}', [CadastroController::class, 'editar'])->name('editar');

Route::get('produtos/{carro}/delete', [CadastroController::class, 'deleteItem'])->name('deleteItem');

Route::delete('produtos/{carro}', [CadastroController::class, 'deletar'])->name('deletar');