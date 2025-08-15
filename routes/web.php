<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\LoginController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('admin.login.page');
});

Route::get('/admin/login', [LoginController::class, 'loginpage'])->name('admin.login.page');
Route::post('admin/login', [LoginController::class, 'loginAdmin'])->name('admin.login');


/* Starts :: Logout Section */
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
/* Ends :: Logout Section */


Route::group(['prefix' => 'admin'], function () {
    // Route::get('/dashboard', function () {
    //     return view('welcome');
    // })->name('admin.dashboard');
    Route::get('/dashboard', [DashboardController::class, "index"])->name('admin.dashboard');

    /** Starts :: Optimize */
    Route::get('/optimize', function () {
        Artisan::call('optimize:clear');
        Artisan::call('view:clear');
        Artisan::call('config:clear');
        Artisan::call('cache:clear');
        Artisan::call('config:cache');

        return redirect()->back();
    })->name('page.optimize');
    /** Ends :: Optimize */
});
