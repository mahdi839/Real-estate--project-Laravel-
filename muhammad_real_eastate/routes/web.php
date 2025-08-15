<?php

use App\Http\Controllers\AboutInfoController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\FooterInfoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\TestimonialController;

Route::get('/', [HomeController::class, 'frontEndIndex'])->name('home');

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::resource('dashboard/properties', PropertyController::class)->middleware(['auth', 'verified']);
Route::resource('dashboard/agents', AgentController::class)->middleware(['auth', 'verified']);
Route::resource('dashboard/testimonials', TestimonialController::class)->middleware(['auth', 'verified']);
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard/footer-info', [FooterInfoController::class, 'edit'])->name('footer-info.edit');
    Route::post('dashboard/footer-info', [FooterInfoController::class, 'update'])->name('footer-info.update');
     Route::get('dashboard/about-info', [AboutInfoController::class, 'edit'])->name('about-info.edit');
    Route::post('dashboard/about-info', [AboutInfoController::class, 'update'])->name('about-info.update');
});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
