<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->name('admin.')->group(function(){
    
    Route::middleware(['guest:admin'])->group(function(){
        Route::view('/register', 'dashboard.admin.register')->name('register');

    });



    Route::middleware(['auth:admin'])->group(function(){
        // Route::view('/register', 'dashboard.admin.register')->name('register');

    });



});
Route::prefix('admin')->name('admin.')->group(function() {
    Route::middleware(['guest:admin'])->group(function() {
        // Route::view('/login', 'dashboard.admin.login')->name('login');
        // Route::view('/register','dashboard.admin.register')->name('register');
        // Route::post('/create', [AdminController::class, 'create'])->name('create');
        // Route::post('/check', [AdminController::class, 'check'])->name('check');

    });


    
    
    Route::middleware(['auth:admin'])->group(function() {
        // Route::get('/logout', [AdminController::class, 'logout'])->name('logout'); 

    });
});




Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
