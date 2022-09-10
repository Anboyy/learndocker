<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\TampilanController;
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

Route::get('/page1', [TampilanController::class, 'page1'])->name('page1');

Route::prefix('tampilan')->group(function () {
    Route::get('/', [TampilanController::class, 'index']);
    Route::get('/detail', [TampilanController::class, 'detail'])->name('detail');
    Route::resource('welcome', TampilanController::class);
});
