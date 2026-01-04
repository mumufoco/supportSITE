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

// Temporary auth routes for testing (remove in production)
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function (\Illuminate\Http\Request $request) {
    if ($request->email === 'admin@example.com' && $request->password === 'password') {
        session(['user_id' => 1]);
        return redirect('/admin/dashboard');
    }
    return back()->withErrors(['email' => 'Credenciais inválidas']);
});

Route::post('/logout', function () {
    session()->forget('user_id');
    return redirect('/');
})->name('logout');
