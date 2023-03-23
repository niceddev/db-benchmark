<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [
    \App\Http\Controllers\OrderController::class,
    'index'
]);

Route::prefix('orders')->group(function () {

    Route::get('/', [
        \App\Http\Controllers\OrderController::class,
        'index'
    ])->name('orders');

    Route::post('/import', [
        \App\Http\Controllers\OrderController::class,
        'import'
    ])->name('import');

});
