<?php

use App\Http\Controllers\CaLamViecController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NhanVienController;
use App\Http\Middleware\AuthticationAdmin;
use App\Models\nhanVien;
use Illuminate\Support\Facades\Auth;
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



Route::get('/login', [LoginController::class, "showForm"]);
Route::post('/login', [LoginController::class, "login"])->name('login');








Route::middleware(['auth.custom'])->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('dashboard');
    Route::resource('nhanvien', NhanVienController::class);
    Route::resource('calamviec', CaLamViecController::class);
    Route::post('/logout', [LoginController::class, "logout"])->name('logout');
});

