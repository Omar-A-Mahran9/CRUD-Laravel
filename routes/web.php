<?php

use App\Http\Controllers\PostsController;
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

Route::get('/', [PostsController::class, 'index']);


Route::get('Posts', [PostsController::class, 'index'])->name('posts.index');


Route::put('/Posts/{post}', [PostsController::class, 'update'])->name('posts.update');


Route::get('/Posts/Create', [PostsController::class, 'Create']);


Route::post("/Posts", [PostsController::class, 'store']) -> name('posts.store');


Route::get("/Posts/{post}/edit", [PostsController::class, 'Edit'])->name('posts.edit');


Route::get('/Posts/{post}', [PostsController::class, 'show']);


Route::delete('/Posts/{post}', [PostsController::class, 'destroy'])->name('posts.destroy');
