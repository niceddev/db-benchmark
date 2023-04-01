<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [
    \App\Http\Controllers\HomeController::class,
    'index'
]);

Route::prefix('meilisearch')->group(function () {

    Route::get('/', [
        \App\Http\Controllers\SearchMethods\MeilisearchController::class,
        'index'
    ])->name('meilisearch');

});

Route::prefix('elasticsearch')->group(function () {

    Route::get('/', [
        \App\Http\Controllers\SearchMethods\ElasticsearchController::class,
        'index'
    ])->name('elasticsearch');

});

Route::prefix('full-text-search')->group(function () {

    Route::get('/', [
        \App\Http\Controllers\SearchMethods\FulltextsearchController::class,
        'index'
    ])->name('full_text_search');

});

Route::prefix('manticoresearch')->group(function () {

    Route::get('/', [
        \App\Http\Controllers\SearchMethods\ManticoresearchController::class,
        'index'
    ])->name('manticoresearch');

});
