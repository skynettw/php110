<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\VideoListController;
use App\Models\Video;
use Illuminate\Support\Facades\DB;

Route::get('/laravel', function () {
    return view('welcome');
});
Route::get('/', [VideoController::class, 'index']);
Route::get('/show/{id}/', [VideoController::class, 'show']);
Route::post('/add', [VideoController::class, 'add']);
Route::get('/delete/{id}/', [VideoController::class, 'delete']);

Route::resource('videolist', VideoListController::class);