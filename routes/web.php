<?php

use App\Http\Controllers\InspectionController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\MitigationController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/inventory', [InventoryController::class, 'index']);
    Route::get('/inventory/{slug}', [InventoryController::class, 'detail']);

    Route::get('/management', [ManagementController::class, 'index']);
    Route::post('/find', [ManagementController::class, 'get']);
    Route::get('/management/{slug}', [ManagementController::class, 'detail']);

    Route::get('/inspection', [InspectionController::class, 'index']);
    Route::get('/inspection/{slug}', [InspectionController::class, 'detail']);

    Route::get('/engineer-inspection/{slug}', [InspectionController::class, 'inspection']);
    Route::get('/maintenance-routine/{slug}', [InspectionController::class, 'maintenance']);

    Route::get('/mitigation', [MitigationController::class, 'index']);
    Route::get('/mitigation/{slug}', [MitigationController::class, 'detail']);
    Route::get('/create/mitigation/{slug}', [MitigationController::class, 'create']);

    Route::post('/temp-upload', [InventoryController::class, 'tempUpload']);
    Route::delete('/temp-delete', [InventoryController::class, 'tempDelete']);
});

Route::middleware([RoleMiddleware::class . ':administrator'])->group(function () {
    Route::post('/inventory', [InventoryController::class, 'store']);
    Route::get('/create/geometry/{slug}', [InventoryController::class, 'create_geometry']);
    Route::post('/create/geometry/{slug}', [InventoryController::class, 'store_geometry']);
    Route::get('/create/characteristic/{slug}', [InventoryController::class, 'create_characteristic']);
    Route::post('/create/characteristic/{slug}', [InventoryController::class, 'store_characteristic']);
    Route::get('/create/rating/{slug}', [InventoryController::class, 'create_rating']);
    Route::post('/create/rating/{slug}', [InventoryController::class, 'store_rating']);

    Route::get('/inspection/geometry/{slug}', [InspectionController::class, 'create_geometry']);
    Route::post('/inspection/geometry/{slug}', [InspectionController::class, 'store_geometry']);
    Route::get('/inspection/characteristic/{slug}', [InspectionController::class, 'create_characteristic']);
    Route::post('/inspection/characteristic/{slug}', [InspectionController::class, 'store_characteristic']);
    Route::get('/inspection/rating/{slug}', [InspectionController::class, 'create_rating']);
    Route::post('/inspection/rating/{slug}', [InspectionController::class, 'store_rating']);

    Route::get('/create/maintenance/{slug}', [InspectionController::class, 'create_maintenance']);
    Route::post('/create/maintenance/{slug}', [InspectionController::class, 'store_maintenance']);


    Route::delete('/slope/{slug}', [InventoryController::class, 'destroy']);

    Route::post('/temp-upload', [InventoryController::class, 'tempUpload']);
    Route::delete('/temp-delete', [InventoryController::class, 'tempDelete']);
});

require __DIR__ . '/auth.php';
