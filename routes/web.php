<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KaalosEntryController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Search', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'numberOfEntries' => fn () => (new KaalosEntryController())->count()
    ]);
});

Route::get('/search', [KaalosEntryController::class, 'search'])->name('search');
Route::get('/login', fn () => Inertia::render('Auth/Login'))->name('login');
Route::get('/register', fn () => Inertia::render('Auth/Register'))->name('register');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'getDashboard'])->name('dashboard');
        Route::get('/kaalosEntries', [KaalosEntryController::class, 'detailedUserIndex'])->name('kaalosDetailed');
        Route::delete('/kaalosentry/{id}', [KaalosEntryController::class, 'delete'])->name('kaalosentry.delete');
        Route::post('/kaalosentry', [KaalosEntryController::class, 'store'])->name('kaalosentry.store');

});
