<?php

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
    return view('welcome', [ 'tags' => App\Models\Tag::get()]);
});

Route::post('tags', [\App\Http\Controllers\TagController::class, 'store']);
Route::delete('tags/{tag}', [\App\Http\Controllers\TagController::class, 'destroy']);
