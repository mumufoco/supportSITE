<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\InstagramController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\ContactController;

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
    return view('home');
});

Route::get('/servicos', function () {
    $services = \App\Models\Service::where('is_active', true)->paginate(12);
    return view('services.index', compact('services'));
})->name('services.index');

Route::get('/portfolio', function () {
    $portfolios = \App\Models\Portfolio::where('is_active', true)->paginate(12);
    return view('portfolio.index', compact('portfolios'));
})->name('portfolio.index');

Route::get('/contato', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contato', [ContactController::class, 'store'])->name('contact.store');

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

    // Settings
    Route::prefix('settings')->name('settings.')->group(function () {
        Route::get('/', [SettingsController::class, 'edit'])->name('edit');
        Route::put('/', [SettingsController::class, 'update'])->name('update');
    });
});

// Temporary auth routes for testing (remove in production)
Route::get('/login', function () {
    $settings = \App\Models\Setting::first() ?? \App\Models\Setting::create([]);
    return view('auth.login', compact('settings'));
})->name('login');

Route::post('/login', function (\Illuminate\Http\Request $request) {
    if ($request->email === 'admin@example.com' && $request->password === 'password') {
        session(['user_id' => 1]);
        return redirect('/admin/dashboard');
    }
    return back()->withErrors(['email' => 'Credenciais inválidas']);
})->name('login.store');

Route::post('/logout', function () {
    session()->forget('user_id');
    return redirect('/');
})->name('logout');
