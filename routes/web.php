<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\searchController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\BookingController;

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
    return view('welcome');
});

Route::get('/mainpage', function () {
    return view('user.mainpage');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/bukus', function () {
    return view('bukus.index');
});

Route::get('/adminsearch', function () {
    return view('admin.search');
});


//ni ada masalah
Route::get('/search',[SearchController::class, 'index'])->name('web.search');
Route::get('/find',[SearchController::class, 'find'])->name('web.find');

Route::resource('bukus', BukuController::class);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('redirects', [HomeController::class, 'index' ]);

Route::get('/schedules', function () {
    return view('schedules.index');
});

Route::resource('schedules', ScheduleController::class);

Route::resource('bookings', BookingController::class);
