<?php

use App\Modules\Additions\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::prefix('rooms')->group(function () {
    Route::get('/', [RoomController::class, 'index']);
    Route::post('/', [RoomController::class, 'store']);
});
