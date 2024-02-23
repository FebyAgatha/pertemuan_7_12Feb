<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\WarehouseController;

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

Route::get('/add/publisher', [PublisherController::class, 'viewAddPublisher']);

Route::post('/store/publisher', [PublisherController::class, 'storePublisher']);

Route::get('/show/publisher', [PublisherController::class, 'show']);

Route::get('/publisher/{id}', [PublisherController::class, 'detail']);

Route::delete('/delete/publisher/{id}', [PublisherController::class, 'delete']);

Route::get('/add/warehouse', [WarehouseController::class, 'viewAddWarehouse']);

Route::post('/store/warehouse', [WarehouseController::class, 'store']);

Route::get('/book/warehouse/{id}', [WarehouseController::class, 'viewBookToWh']);

Route::post('/store/warehouse/{id}', [WarehouseController::class, 'storeBookToWh']);

Route::get('/detail/warehouse', [WarehouseController::class, 'detail']);