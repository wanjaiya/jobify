<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\MenuTypeController;
use App\Http\Controllers\Common\PublishController;

Route::middleware(['can:manage-site'])->group(function () {
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
