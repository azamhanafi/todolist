<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class,'index']);
Route::post('/', [TodoController::class,'store']);
Route::patch('/{todo}', [TodoController::class,'update']);
Route::delete('/{todo}', [TodoController::class,'destroy']);
Route::delete('/', [TodoController::class,'clear']);


