<?php

use App\Modules\Additions\Room\Room\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Room routes
Route::prefix('rooms')->group(function () {
    Route::get('/', [RoomController::class, 'index']);
    Route::post('/', [RoomController::class, 'store']);
    Route::get('/{id}', [RoomController::class, 'show']);
    Route::put('/{id}', [RoomController::class, 'update']);
    Route::delete('/{id}', [RoomController::class, 'destroy']);
    Route::patch('/{id}/status', [RoomController::class, 'changeStatus']);
});
