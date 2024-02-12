<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Route::get('/', [BookController::class, 'ViewAllBook']);

Route::get('/add/book', [BookController::class, 'AddBook']);

Route::post('/store/book', [BookController::class, 'StoreBook']);

Route::get('/book/{id}', [BookController::class, 'ViewBook']);

Route::get('/update/book/{id}', [BookController::class, 'viewUpdateBook']);

Route::patch('/save/update/{id}', [BookController::class, 'saveUpdate']);

Route::delete('/delete/book/{id}', [BookController::class, 'deleteBook']);