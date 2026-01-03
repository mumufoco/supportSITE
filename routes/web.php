<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\InstagramController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Frontend Routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/servicos', function () {
    return view('services.index');
})->name('services.index');

Route::get('/portfolio', function () {
    return view('portfolio.index');
})->name('portfolio.index');

Route::get('/contato', function () {
    return view('contact.index');
})->name('contact.index');

// Admin Routes
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    
    // Dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Services
    Route::resource('services', ServiceController::class);

    // Portfolios
    Route::resource('portfolios', PortfolioController::class);

    // Instagram
    Route::prefix('instagram')->name('instagram.')->group(function () {
        Route::get('/', [InstagramController::class, 'index'])->name('index');
        Route::post('/sync', [InstagramController::class, 'sync'])->name('sync');
        Route::patch('/{post}/toggle', [InstagramController::class, 'toggle'])->name('toggle');
        Route::delete('/{post}', [InstagramController::class, 'destroy'])->name('destroy');
    });
});

// Authentication Routes (if using Laravel Breeze or Fortify)
// require __DIR__.'/auth.php';
