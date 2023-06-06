<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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

Route::get('/', [ItemController::class, 'index'])->name('index');

Route::get('/add-item', [ItemController::class, 'create'])->name('create');
Route::post('/add-item', [ItemController::class, 'store'])->name('store');

Route::get('/edit-item/{id}', [ItemController::class, 'edit'])->name('edit');
Route::put('/edit-item/{id}', [ItemController::class, 'update'])->name('update');

Route::get('/delete-item/{id}', [ItemController::class, 'delete'])->name('delete');
Route::delete('/delete-item/{id}', [ItemController::class, 'destroy'])->name('destroy');
