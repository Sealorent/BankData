<?php

use App\Http\Controllers\BankDataController;
use App\Http\Controllers\DataSpasialController;
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
    return view('login');
});

Route::get('/bank-data', [BankDataController::class, 'index'])->name('BankData.index');
Route::get('/data-spatial', [DataSpasialController::class, 'index'])->name('DataSpatial.index');
