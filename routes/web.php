<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\AlquilerController;

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
Route::post('oauth/token', [ AuthController::class, 'login'])->name('api/login');

Route::get('nota-venta/{id}', [AlquilerController::class, 'pdfNotaVenta']);
Route::get('/hey', function () {
    return view('alquiler.notaVenta');
});
