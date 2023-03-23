<?php

use Illuminate\Support\Facades\Route;

Route::post('/send', [
    \App\Http\Controllers\SendDataController::class,
    'send'
]);
