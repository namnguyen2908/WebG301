<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\NationalController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::resource("/musics", MusicController::class);
Route::resource("/authors", AuthorController::class);
Route::resource("/nationals", NationalController::class);
Route::resource("/music", CategoryController::class);
Route::get('/search', MusicController::class . '@search');