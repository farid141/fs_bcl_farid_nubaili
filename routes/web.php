<?php

use Illuminate\Support\Facades\Route;
use App\Models\Armada;
use App\Models\Pengiriman;
use App\Http\Controllers\ArmadaController;
use App\Http\Controllers\PengirimanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/armada', ArmadaController::class);
Route::resource('/pengiriman', PengirimanController::class);