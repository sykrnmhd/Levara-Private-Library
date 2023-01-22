<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\searchController;
use App\Http\Controllers\bookController;

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

//booking
Route::get('booking', [bookController::class, 'index']);
Route::resource('tobook', bookController::class);
Route::get('delete/{id}', [bookController::class, 'destroy']);

// Route::get('/booking', function () {
//     return view('booking');
// });

// //ni ada masalah
// Route::get('/search',[SearchController::class, 'index'])->name('web.search');
// Route::get('/find',[SearchController::class, 'find'])->name('web.find');
