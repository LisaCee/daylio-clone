<?php

use App\Http\Controllers\EntryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EntryController::class, 'index'])->name('entry.index');

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);
    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'get'])->name('profile.index');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/edit', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/entries', [EntryController::class, 'index'])->name('entry.index');
    Route::get('/entries/create', [EntryController::class, 'create'])->name('entry.create');
    Route::post('/entries', [EntryController::class, 'store'])->name('entry.store');

    Route::get('/reports/weekly', [ReportController::class, 'weeklyMoodReport'])->name('report.weekly');
});

Route::post('/logout', [SessionController::class, 'logout']);
