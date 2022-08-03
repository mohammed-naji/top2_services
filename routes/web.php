<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{

    Route::prefix('admin')->name('admin.')->middleware('auth', 'check_user')->group(function() {
        Route::get('/', [AdminController::class, 'index'])->name('index');
    });


    Route::get('/', function() {
        return view('welcome');
    });

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});
