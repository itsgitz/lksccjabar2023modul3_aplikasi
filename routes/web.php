<?php

use App\Http\Controllers\Auth;
use App\Http\Controllers\News;
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

Route::get('/', [News::class, 'index'])->name('news.index');
Route::get('/{id}', [News::class, 'show'])->name('news.show');
Route::get('/login', [Auth::class, 'index'])->name('auth.login');
Route::post('/login', [Auth::class, 'authenticate'])->name('auth.authenticate');
Route::get('/register', [Auth::class, 'create'])->name('auth.register');
Route::get('/logout', [Auth::class, 'destroy'])->name('auth.logout');
Route::resource('news', News::class)->except(['index', 'show'])->middleware(['auth']);
