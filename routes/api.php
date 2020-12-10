<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::name('challenge')->group(function () {

    // http://127.0.0.1:8000/api/registros?nombre=Paulo&apellido=Horna&email=paulo@bestpractice.dev&ingresos=2000&monto_solicitado=10000&hora_inicial=12:00:00&hora_final=18:00:00
    Route::post('registros', 'RegistroController@store');


    // http://127.0.0.1:8000/api/agenda/2
    Route::get('agenda/{id}', 'AnalistaController@agenda');
});
