<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\TipoMascotaController as TipoMascota;
use App\Http\Controllers\Api\V1\MascotaPerdidaController as MascotaPerdida;
use App\Http\Controllers\Api\V1\PruebaController as Prueba;
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

Route::apiResource('/v1/tipo', TipoMascota::class);
Route::apiResource('/v1/mascota', MascotaPerdida::class);
Route::apiResource('/v1/prueba', Prueba::class);

