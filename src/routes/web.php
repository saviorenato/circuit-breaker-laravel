<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestController;

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
Route::get('/', [RequestController::class, 'requestApi']);

Route::controller(RequestController::class)->group(function () {
    Route::get('/', 'requestApi');
    Route::get('/teste-servico', 'testCircuitBreaker');
});
