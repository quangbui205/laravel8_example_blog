<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/post') -> group(function () {
    Route::get('/', [PostController::class, 'index'])
        ->name('post.index');

    Route::get('/create', [PostController::class, 'add'])
        ->name('post.add');

    Route::post('/create', [PostController::class, 'create'])
        ->name('post.create');

    Route::get('/detail/{id}', [PostController::class, 'detail'])
        ->name('post.detail')->where('id', '[0-9]+');

    Route::get('/update/{id}', [PostController::class, 'edit'])
        ->name('post.edit')->where('id', '[0-9]+');

    Route::post('/update/{id}', [PostController::class, 'update'])
        ->name('post.update')->where('id', '[0-9]+');

    Route::post('/delete/{id}', [PostController::class, 'delete'])
        ->name('post.delete')->where('id', '[0-9]+');
});
