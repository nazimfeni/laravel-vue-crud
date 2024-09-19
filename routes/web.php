<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
<<<<<<< HEAD
use App\Http\Controllers\ProductController;
=======
>>>>>>> 5064d8fddc360dd207bae1b4e5411de258d951da
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;

Route::get('/',[FrontendController::class,'index'])->name('myhome');
Route::get('/about',[FrontendController::class,'about'])->name('aboutUs');
Route::inertia('/contact','Frontend/Contact')->name('contactUs');

<<<<<<< HEAD
Route::resource('products', ProductController::class);


=======
>>>>>>> 5064d8fddc360dd207bae1b4e5411de258d951da
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
