<?php

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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\MonProjetController;

Route::get('/home', [MonProjetController::class, 'index']);
Route::get('/chairs', [MonProjetController::class, 'chairs']);
Route::get('/sofas', [MonProjetController::class, 'sofas']);
Route::get('/contact', [MonProjetController::class, 'contact']);
Route::post('/contact', [MonProjetController::class, 'formContact']);