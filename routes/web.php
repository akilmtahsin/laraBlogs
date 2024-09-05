<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

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



Route::get('/', [BlogController::class, 'index'])->name('view.blogs');
Route::get('blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('blog/store', [BlogController::class, 'store'])->name('blog.store');
Route::get('blog/{slug}', [BlogController::class, 'blogDetails'])->name('blog.details');