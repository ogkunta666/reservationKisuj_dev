<?php

use App\Http\Controllers\Api\ReservationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/hello', function (Request $request) {
    return response()->json(['message' => 'Hello, API!']);
});

Route::get('/reservations', [ReservationController::class, 'index']);

Route::get('/reservations/{id}', [ReservationController::class, 'show']);

Route::post('/reservations', [ReservationController::class, 'store']);

Route::put('/reservations/{id}', [ReservationController::class, 'update']); // egy foglalas minden adatat frissiti

Route::post('/reservations/{id}', [ReservationController::class, 'update']); // egy foglalas nehany adatjat frissiti

Route::delete('/reservations/{id}', [ReservationController::class, 'destroy']);
?>