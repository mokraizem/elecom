<?php

use App\Http\Controllers\Admin\AdminMainController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/admin/dashboard', function(){
//     return view('admin.admin');
// })->middleware(['auth' , 'verified' , 'rolemanager:admin'])->name('admin');



Route::middleware(['auth', 'verified', 'rolemanager:admin'])->group(function(){

    Route::controller(AdminMainController::class)->group(function(){

        Route::prefix('admin')->group(function(){

            Route::get('/dashboard', 'index')->name('admin');

        });

    });

});


Route::get('/vendor/dashboard', function(){
    return view('vendor');
})->middleware('auth', 'verified' , 'rolemanager:vendor')->name('vendor');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'rolemanager:customer'])->name('dashboard');

Route::get('/guest/dashboard', function(){
    return view('guest');
})->middleware(['auth', 'verified' ,  'rolemanager:guest'])->name('guest');

Route::get('/trial', function(){
    return view('trial');
})->middleware(['auth', 'verified' , 'rolemanager:trail'])->name('trial');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
