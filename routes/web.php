<?php

use App\Http\Controllers\ColaboradorController;
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

Route::get('/', [ColaboradorController::class, 'list'])->name('index');
Route::get('colaboradores', [ColaboradorController::class, 'list'])->name('list_colaboradores');
Route::get('colaborador/novo', [ColaboradorController::class, 'create'])->name('create_colaborador');;
Route::post('colaborador/novo', [ColaboradorController::class, 'store'])->name('store_colaborador');
Route::get('colaborador/{id}', [ColaboradorController::class, 'show'])->name('show_colaborador');
Route::get('colaborador/editar/{id}', [ColaboradorController::class, 'edit'])->name('edit_colaborador');
Route::post('colaborador/editar/{id}', [ColaboradorController::class, 'update'])->name('update_colaborador');
Route::get('colaborador/excluir/{id}', [ColaboradorController::class, 'delete'])->name('delete_colaborador');
Route::post('colaborador/excluir/{id}', [ColaboradorController::class, 'destroy'])->name('destroy_colaborador');
Route::get('buscar/', [ColaboradorController::class, 'search'])->name('search_colaborador');


