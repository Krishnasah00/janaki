<?php

use App\Http\Controllers\Frontend\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('admin.login.page');
});

Route::get('/admin/login', [LoginController::class, 'loginpage'])->name('admin.login.page');
Route::post('admin/login', [LoginController::class, 'loginAdmin'])->name('admin.login');


Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', function () {
        return view('welcome');
    })->name('admin.dashboard');
});
