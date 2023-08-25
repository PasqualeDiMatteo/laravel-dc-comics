<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route Home
Route::get('/', [HomeController::class, "index"])->name("home");

// Route Comics
Route::get('/comics', [ComicController::class, "index"])->name("comics.index");
