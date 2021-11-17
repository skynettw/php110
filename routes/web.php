<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello/', function () {
    return view('hello');
});
Route::get('/video/', [VideoController::class, 'index']);
Route::get('/show/{id}/', [VideoController::class, 'show']);