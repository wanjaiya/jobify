<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeContoller;
use App\Http\Controllers\Common\ProfileController;


Route::get('/', [HomeContoller::class, 'index'])->name('home');
Route::get('/about-us', [HomeContoller::class, 'aboutUs'])->name('about-us');
Route::get('/services', [HomeContoller::class, 'services'])->name('services');
Route::get('/jobs', [HomeContoller::class, 'jobs'])->name('jobs');


Route::get('/dashboard', [HomeContoller::class ,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('my-profile');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profiles.update');

    Route::post('/candidate/experience', [ProfileController::class, 'experienceStore'])
        ->name('candidate.experience.store');
    Route::patch('/candidate/experience', [ProfileController::class, 'experienceUpdate'])
        ->name('candidate.experience.update');
    Route::delete('/candidate/experience/{experience}', [ProfileController::class, 'experienceDestroy'])->name('candidate.experience.destroy');


    Route::get('/my-applications', [HomeContoller::class, 'myApplications'])->name('my-applications');
});



require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
