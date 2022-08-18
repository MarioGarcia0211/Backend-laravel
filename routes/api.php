<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PruebaAdminController;
use App\Http\Controllers\PruebaTaquiController;
use App\Http\Controllers\PruebaTurisController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegistroIdFijoController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\TaquiController;
use App\Http\Controllers\TuristaController;
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

Route::resource('usuario', UserController::class);
Route::resource('roles', RolController::class);
Route::resource('perfil', ProfileController::class);
Route::resource('ingresos', RegisterController::class);
Route::resource('administrador', AdminController::class);
Route::resource('taquillero', TaquiController::class);
Route::resource('turista', TuristaController::class);
Route::resource('pruebaadmin', PruebaAdminController::class);
Route::resource('pruebataqui', PruebaTaquiController::class);
Route::resource('pruebaturis', PruebaTurisController::class);
Route::resource('misingresos', RegistroIdFijoController::class);

