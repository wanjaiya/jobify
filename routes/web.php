<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeContoller;
use App\Http\Controllers\Common\ProfileController;
use App\Http\Controllers\Common\EducationController;
use App\Http\Controllers\Common\WorkExperienceController;
use App\Http\Controllers\Common\CertificationController;
use App\Http\Controllers\Common\SkillController;

Route::get('/', [HomeContoller::class, 'index'])->name('home');
Route::get('/about-us', [HomeContoller::class, 'aboutUs'])->name('about-us');
Route::get('/services', [HomeContoller::class, 'services'])->name('services');
Route::get('/jobs', [HomeContoller::class, 'jobs'])->name('jobs');


Route::get('/dashboard', [HomeContoller::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/my-applications', [HomeContoller::class, 'myApplications'])->name('my-applications');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('my-profile');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profiles.update');

    Route::post('/candidate/experience', [WorkExperienceController::class, 'experienceStore'])
        ->name('candidate.experience.store');
    Route::patch('/candidate/experience', [WorkExperienceController::class, 'experienceUpdate'])
        ->name('candidate.experience.update');
    Route::delete('/candidate/experience/{experience}', [WorkExperienceController::class, 'experienceDestroy'])->name('candidate.experience.destroy');


    Route::post('/candidate/education', [EducationController::class, 'store'])
        ->name('candidate.education.store');
    Route::patch('/candidate/education', [EducationController::class, 'update'])
        ->name('candidate.education.update');
    Route::delete('/candidate/education/{education}', [EducationController::class, 'destroy'])->name('candidate.education.destroy');

    Route::post('/candidate/certification', [CertificationController::class, 'store'])
        ->name('candidate.certification.store');
    Route::patch('/candidate/certification', [CertificationController::class, 'update'])
        ->name('candidate.certification.update');
    Route::delete('/candidate/certification/{certification}', [CertificationController::class, 'destroy'])->name('candidate.certification.destroy');

    Route::get('/candidate/skills', [SkillController::class, 'index'])->name('candidate.skills');
    Route::post('/candidate/skills', [SkillController::class, 'store'])->name('candidate.skill.store');
    Route::delete('/candidate/skills/{skill}', [SkillController::class, 'destroy'])->name('candidate.skill.destroy');
    Route::get('/skills/search', [SkillController::class, 'search']);
});



require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
