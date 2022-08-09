<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaketController;
use App\Models\Umroh;

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
    return view('home',[
      'umroh' =>Umroh::all()
    ]);
});

Route::get('about', function () {
    return view('about');
});

Route::get('umroh', function () {
    return view('umroh',[
      'umroh'  => Umroh::all()
    ]);
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('admin', function () {
    return view('admin.main');
});

Route::get('login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('login', [LoginController::class, 'auth']);
Route::post('logout', [LoginController::class, 'logout']);

Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth');
// Route::get('test', [DaftarController::class, 'test']);
// Route::get('daftar', [DaftarController::class, 'index']);

Route::resource('daftar', DaftarController::class)->middleware('guest');

Route::resource('paket', PaketController::class)->middleware('auth');
