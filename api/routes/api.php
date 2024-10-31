<?php
use App\Http\Controllers\TransaksiPenjualanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/transaksipenjualan',[TransaksiPenjualanController::class,'index']);
Route::post('/transaksipenjualan',[TransaksiPenjualanController::class,'store']);
