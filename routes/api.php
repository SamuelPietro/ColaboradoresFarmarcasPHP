<?php

use App\Http\Controllers\Api\ColaboradorController;
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

// List colaboradores
Route::get('colaboradores', [ColaboradorController::class, 'index']);

// List single colaborador
Route::get('colaborador/{id}', [ColaboradorController::class, 'show']);

// Create new colaborador
Route::post('colaborador', [ColaboradorController::class, 'store']);

// Update colaborador
Route::put('colaborador/{id}', [ColaboradorController::class, 'update']);

// Delete colaborador
Route::delete('colaborador/{id}', [ColaboradorController::class,'destroy']);
