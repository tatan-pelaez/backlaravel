<?php

use Illuminate\Support\Facades\Route;
use App\Models\Paises;
use App\Http\Controllers\PaisesController;
use App\Http\Controllers\CiudadesController;
use App\Http\Controllers\infopc;

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
Route::get('/Show',[PaisesController::class,'index']);
Route::get('/ShowCIty',[CiudadesController::class,'index']);
Route::get('/ShowCIty/{id}',[CiudadesController::class,'show']);
Route::post('/Insert', [PaisesController::class, 'create']);
Route::post('/InsertCity', [CiudadesController::class, 'create']);
Route::get('/info', [infopc::class, 'getInfo']);
Route::get('/ShowHistory/{ip}/{nombrepc}', [infopc::class, 'show']);
Route::post('/InsertHIstory', [infopc::class, 'create']);