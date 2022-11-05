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

Route::get('Posts', [PostsController::class, 'index']);

Route::post('/Posts/update/{post}', [PostsController::class, 'update']);

Route::get('/Posts/Create', [PostsController::class, 'Create']);

Route::post("/Posts", [PostsController::class, 'store']);

Route::get("/Posts/{post}/edit", [PostsController::class, 'Edit']);

Route::get('/Posts/{post}', [PostsController::class, 'show']);

Route::Delete('/Posts/{post}', [PostsController::class, 'destroy']);
