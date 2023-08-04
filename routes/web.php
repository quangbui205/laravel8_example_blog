<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
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
    Route::get('/', function () {
        return 'Post Index';
    })->name('post.index');

    Route::get('/create', function () {
        return 'Post Create';
    })->name('post.add');

    Route::post('/create', [PostController::class, 'create'])
        ->name('post.create');

    Route::get('/detail/{id}', function (Request $request, $id) {
        return 'Post detail: ' . $id;
    })->name('post.detail')->where('id', '[0-9]+');

    Route::get('/update/{id}', function (Request $request, $id) {
        return 'Post update: ' . $id;
    })->name('post.edit')->where('id', '[0-9]+');

    Route::post('/update/{id}', [PostController::class, 'info'])
        ->name('post.update')->where('id', '[0-9]+');

    Route::post('/delete/{id}', [PostController::class, 'delete'])
        ->name('post.delete')->where('id', '[0-9]+');
});
