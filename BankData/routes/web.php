<?php

use App\Http\Controllers\BankDataController;
use App\Http\Controllers\DataSpasialController;
use App\Http\Controllers\Fronend\HomeController;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\ProfileController;
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


Route::get('/', [FrontendHomeController::class, 'index'])->name('home.index');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/bank-data', [BankDataController::class, 'index'])->name('BankData.index');
    Route::get('/data-spasial', [DataSpasialController::class, 'index'])->name('DataSpasial.index');
});

require __DIR__ . '/auth.php';
