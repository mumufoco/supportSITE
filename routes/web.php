<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\InstagramController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TermsController;

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

// Frontend Routes - Root redirects to Portuguese
Route::get('/', function () {
    return redirect('/pt/home');
});

// Portuguese Routes (Português)
Route::prefix('pt')->name('pt.')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/denuncia', [ReportController::class, 'index'])->name('denuncia');
    Route::post('/denuncia', [ReportController::class, 'store'])->name('denuncia.store');
    Route::get('/termos', [TermsController::class, 'index'])->name('termos');
    
    // Legacy routes compatibility
    Route::get('/servicos', function () {
        $services = \App\Models\Service::where('is_active', true)->paginate(12);
        return view('services.index', compact('services'));
    })->name('servicos');
    
    Route::get('/portfolio', function () {
        $portfolios = \App\Models\Portfolio::where('is_active', true)->paginate(12);
        return view('portfolio.index', compact('portfolios'));
    })->name('portfolio');
    
    Route::get('/contato', [ContactController::class, 'show'])->name('contato');
    Route::post('/contato', [ContactController::class, 'store'])->name('contato.store');
});

// English Routes (English)
Route::prefix('en')->name('en.')->group(function () {
    Route::get('/home', [HomeController::class, 'indexEn'])->name('home');
    Route::get('/report', [ReportController::class, 'indexEn'])->name('report');
    Route::post('/report', [ReportController::class, 'store'])->name('report.store');
    Route::get('/terms', [TermsController::class, 'indexEn'])->name('terms');
    
    Route::get('/services', function () {
        $services = \App\Models\Service::where('is_active', true)->paginate(12);
        return view('services.index', compact('services'));
    })->name('services');
    
    Route::get('/portfolio', function () {
        $portfolios = \App\Models\Portfolio::where('is_active', true)->paginate(12);
        return view('portfolio.index', compact('portfolios'));
    })->name('portfolio');
    
    Route::get('/contact', [ContactController::class, 'show'])->name('contact');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
});

// Spanish Routes (Español)
Route::prefix('es')->name('es.')->group(function () {
    Route::get('/home', [HomeController::class, 'indexEs'])->name('home');
    Route::get('/denuncia', [ReportController::class, 'indexEs'])->name('denuncia');
    Route::post('/denuncia', [ReportController::class, 'store'])->name('denuncia.store');
    Route::get('/terminos', [TermsController::class, 'indexEs'])->name('terminos');
    
    Route::get('/servicios', function () {
        $services = \App\Models\Service::where('is_active', true)->paginate(12);
        return view('services.index', compact('services'));
    })->name('servicios');
    
    Route::get('/portfolio', function () {
        $portfolios = \App\Models\Portfolio::where('is_active', true)->paginate(12);
        return view('portfolio.index', compact('portfolios'));
    })->name('portfolio');
    
    Route::get('/contacto', [ContactController::class, 'show'])->name('contacto');
    Route::post('/contacto', [ContactController::class, 'store'])->name('contacto.store');
});

// Legacy compatibility routes (redirect to Portuguese)
Route::get('/servicos', function () {
    return redirect()->route('pt.servicos');
});

Route::get('/portfolio', function () {
    return redirect()->route('pt.portfolio');
});

Route::get('/contato', function () {
    return redirect()->route('pt.contato');
});

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
