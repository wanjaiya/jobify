<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\MenuTypeController;
use App\Http\Controllers\Common\PublishController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profiles.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
    Route::middleware(['can:manage-site'])->group(function() {
     Route::resource('menuTypes', MenuTypeController::class);
     Route::post('menuTypes/{menuType}/publish', [MenuTypeController::class, 'publish'])->name('menuTypes.publish');
     Route::resource('menus', MenuController::class);

    });
    
    
    Route::middleware(['can:manage-users'])->group(function () {
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);
        Route::resource('users', UserController::class);
        Route::get('users/{user}/verify', [UserController::class, 'verify'])->name('users.verify');
    });

    

    Route::post('/admin/publish/{model}/{id}', [PublishController::class, 'publish'])
    ->name('admin.publish');

    Route::post('/admin/unpublish/{model}/{id}', [PublishController::class, 'unpublish'])
    ->name('admin.unpublish');


});



require __DIR__.'/auth.php';
