<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\VideoListController;
use App\Models\Video;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/user', function () {
    $user = Auth::user();
    if ($user == NULL) {
        return "未登入";
    } else {
        return $user;
    }
});

Route::get('/mylogout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
});

Route::get('/', [VideoController::class, 'index']);
Route::middleware(['auth'])->group(function () {
    Route::get('/show/{id}/', [VideoController::class, 'show']);
    Route::post('/add', [VideoController::class, 'add']);
    Route::get('/delete/{id}/', [VideoController::class, 'delete']);
});
Route::resource('videolist', VideoListController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
