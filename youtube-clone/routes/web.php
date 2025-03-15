<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Video;

Route::get('/', function () { return Inertia::render('Welcome', [
    'videos' => Video::inRandomOrder()->get()
]);
})->name('home');
Route::get('/delete-video', function () { return Inertia::render('DeleteVideo');})->name('deleteVideo');
Route::get('/videos/{id}', [\App\Http\Controllers\VideosController::class, 'show'])->name('videos.show');
Route::get('/add-video', function () {
    return Inertia::render('AddVideo');
})->name('addVideo');

require __DIR__.'/auth.php';