<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [CommentController::class, 'index'])->name('comment');
Route::get('/create', [CommentController::class, 'create'])->name('comment.create');
Route::post('/store', [CommentController::class, 'store'])->name('comment.store');
Route::get('/edit/{id}', [CommentController::class, 'edit'])->name('comment.edit');
Route::post('/update/{id}', [CommentController::class, 'update'])->name('comment.update');
Route::post('/delete/{id}', [CommentController::class, 'destroy'])->name('comment.destroy');
