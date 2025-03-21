<?php

use App\Http\Controllers\ProfileController;
use App\Models\Video;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('Welcome', ['videos' => Video::inRandomOrder()->get()]);
})->name('home');
Route::get('/add-video', function () {
    return Inertia::render('AddVideo');
})->name('addVideo');
Route::get('/delete-video', function () {
    return Inertia::render('DeleteVideo', ['videos' => Video::all()]);
})->name('deleteVideo');

Route::get('/videos/{id}', [\App\Http\Controllers\VideosController::class, 'show'])->name('videos.show');
Route::post('/videos', [\App\Http\Controllers\VideosController::class, 'store'])->name('videos.store');
Route::delete('/videos/{id}', [\App\Http\Controllers\VideosController::class, 'destroy'])->name('videos.destroy');

require __DIR__ . '/auth.php';
