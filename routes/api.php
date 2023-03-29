<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DireccionClienteController;
use App\Http\Controllers\GrupoClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProfesionController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\TipoDocumentoController;
use App\Http\Controllers\UserController;

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

//usuarios
Route::group(['middleware' => 'auth:api'], function () use ($router) {
    Route::get('authinfo', [UserController::class, 'getAuthenticated']);
});

//clientes
Route::group(['middleware' => 'auth:api'], function () use ($router) {
    Route::post('cliente/crear', [ClienteController::class, 'store']);
    Route::post('cliente/{clienteId}/agregar-direccion', [ClienteController::class, 'addAddress']);
    Route::get('clientes/seleccion/todos', [ClienteController::class, 'allToSelect']);
    Route::get('cliente/buscar-dni', [ClienteController::class, 'searchClienteDni']);
});

//direcciones de clientes
Route::group(['middleware' => 'auth:api'], function () use ($router) {
    Route::get('direcciones-cliente/{clienteId}/todos', [DireccionClienteController::class, 'allFromAClient']);
    Route::put('direccion-cliente/{direccionClienteId}/editar', [DireccionClienteController::class, 'update']);
    Route::delete('direccion-cliente/{direccionClienteId}/eliminar', [DireccionClienteController::class, 'delete']);
});

//grupos de cliente
Route::group(['middleware' => 'auth:api'], function () use ($router) {
    Route::get('grupos-cliente/seleccion/todos', [GrupoClienteController::class, 'allToSelect']);
});

//productos
Route::group(['middleware' => 'auth:api'], function () use ($router) {
    Route::get('productos/todos', [ProductoController::class, 'all']);
});

//profesiones
Route::group(['middleware' => 'auth:api'], function () use ($router) {
    Route::get('profesiones/seleccion/todos', [ProfesionController::class, 'allToSelect']);
});

//roles
Route::group(['middleware' => 'auth:api'], function () use ($router) {
    Route::get('roles', [RolController::class, 'all']);
    Route::post('rol/crear', [RolController::class, 'store']);
});

//tipos de documento
Route::group(['middleware' => 'auth:api'], function () use ($router) {
    Route::get('tipos-documento/seleccion/todos', [TipoDocumentoController::class, 'allToSelect']);
});

//usuarios
Route::group(['middleware' => 'auth:api'], function () use ($router) {
    Route::post('usuario/crear', [UserController::class, 'store']);
    Route::get('usuarios/todos', [UserController::class, 'getUsersTable']);
});