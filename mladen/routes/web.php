<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StranicaController;
use App\Http\Controllers\StadionController;
use App\Http\Controllers\UtakmicaController;
use App\Http\Controllers\UlaznicaController;

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

Route::get('/', [StranicaController::class, 'stadioni']);
Route::get('/stadioni', [StranicaController::class, 'stadioni']);
Route::get('/utakmice', [StranicaController::class, 'utakmice']);

Route::get('/stadion/{stadion}', [StadionController::class, 'show']);
Route::get('/utakmica/{utakmica}', [UtakmicaController::class, 'show']);

Route::prefix('api')->group(function () {
    Route::get('/stadioni/get', [StadionController::class, 'get']);

    Route::delete('/utakmice/destroy/{utakmica_id}', [UtakmicaController::class, 'destroy']);
    Route::get('/utakmice/get', [UtakmicaController::class, 'get']);

    Route::post('/ulaznice/store', [UlaznicaController::class, 'store']);
});
