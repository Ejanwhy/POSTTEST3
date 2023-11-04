<?php

use App\Http\Controllers\donasiController;
use App\Http\Controllers\proyekController;
use App\Http\Controllers\dataController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
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

Route::get('/donors', function () {
    return view('donors');
});

Route::get('/index', [donasiController::class, 'index']);
Route::post('/donors/store',[donasiController::class, 'store']);

Route::get('/tambahproyek', function () {
    return view('tambahproyek');
});
Route::get('/project', [proyekController::class, 'project']);
Route::post('/tambahproyek/store',[proyekController::class, 'store']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/data', [dataController::class, 'index']);

Route::get('/edit/{id}', [proyekController::class, 'edit']);
Route::post('edit/update', [proyekController::class, 'update']);

Route::get('/hapus/{id}', [proyekController::class, 'destroy']);

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('login');
    })->name('logout');
    
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);