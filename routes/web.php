<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/projects', function () {
    return view('pages.projects');
});

Route::get('/contact', function () {
    return view('pages.contact');
});



Route::prefix('admin')->name('admin.')->group(function(){
    
    Route::middleware(['guest:admin'])->group(function(){
        Route::view('/register', 'dashboard.admin.register')->name('register');
        Route::view('/login', 'dashboard.admin.login')->name('login');

        Route::post('/createadmin', [AdminController::class, 'createadmin'])->name('createadmin');
        Route::post('/loginadmin', [AdminController::class, 'loginadmin'])->name('loginadmin');
        
    });



    Route::middleware(['auth:admin'])->group(function(){
        // Route::view('/register', 'dashboard.admin.register')->name('register');
        Route::get('/home', [AdminController::class, 'home'])->name('home');

    });



});
// Route::prefix('admin')->name('admin.')->group(function() {
//     Route::middleware(['guest:admin'])->group(function() {
//         // Route::view('/login', 'dashboard.admin.login')->name('login');
//         // Route::view('/register','dashboard.admin.register')->name('register');
//         // Route::post('/create', [AdminController::class, 'create'])->name('create');
//         // Route::post('/check', [AdminController::class, 'check'])->name('check');

//     });


    
    
//     Route::middleware(['auth:admin'])->group(function() {
//         // Route::get('/logout', [AdminController::class, 'logout'])->name('logout'); 

//     });
// });




Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
