<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\searchController;

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
    return view('mainpage');
});

//ni ada masalah
Route::get('/search',[SearchController::class, 'index'])->name('web.search');
Route::get('/find',[SearchController::class, 'find'])->name('web.find');
