<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('welcome');
});

// Admin Route
Route::middleware(['auth','role:admin'])->get('/admin', function () {
    return 'Admin Area';
});

// Manager Route
Route::middleware(['auth', 'role:manager'])->get('/manager', function(){
return "Manager Area";
});

Route::middleware(['auth'])->group(function () {

    Route::resource('projects', ProjectController::class);
    Route::resource('tasks', TaskController::class);

});












Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
