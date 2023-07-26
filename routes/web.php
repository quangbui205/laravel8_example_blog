<?php

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

//Route::prefix('/post') -> group(function () {
//    Route::get('/index', [PostController::class, 'list'])->name('user.list');
//    Route::get('/create', [PostController::class, 'create'])->name('user.create');
//    Route::post('/create', [PostController::class, 'handleCreate'])->name('user.create');
//    Route::get('/info/{id}', [PostController::class, 'info'])->name('user.info')->where('id', '[0,9]+');
//    Route::put('/update/{id?}', 'PostController@update')->where('id', '[0, 9]+');
//    Route::delete('/delete/{id?}', 'PostController@delete')->where('id', '[0, 9]+');
//});
