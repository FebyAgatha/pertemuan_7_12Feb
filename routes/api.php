<?php

use App\Http\Controllers\Api\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/book', [BookController::class, 'viewAll']);
Route::get('/{id}/book', [BookController::class, 'show']);
Route::post('/create/book', [BookController::class, 'create']);
Route::patch('/update/{id}/book', [BookController::class, 'update']);
Route::delete('/delete/{id}/book', [BookController::class, 'delete']);