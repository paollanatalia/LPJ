<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('index');
})->name('index');

Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/game-01', function(){
    return view('game-01');
})->middleware(['auth'])->name('game-01');

Route::get('/dashboard/game-02', function(){
    return view('game-02');
})->middleware(['auth'])->name('game-02');

Route::get('/dashboard/game-03', function(){
    return view('game-03');
})->middleware(['auth'])->name('game-03');

Route::get('/dashboard/game-04', function(){
    return view('game-04');
})->middleware(['auth'])->name('game-04');


require __DIR__.'/auth.php';
