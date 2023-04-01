<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::prefix('orders')->group(function () {

    Route::get('/', [
        \App\Http\Controllers\OrderController::class,
        'index'
    ])->name('index');

});

Route::prefix('search-methods')->group(function () {

    Route::get('/{method}', [
        \App\Http\Controllers\SearcherController::class,
        'index'
    ])->name('searcher');

});
