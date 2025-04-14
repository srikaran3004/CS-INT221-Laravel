<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MailingController;

// Public routes for different dashboards
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Email route
Route::match(['get', 'post'], '/email', [MailingController::class, 'email'])->name('email');
Route::get('/test-email', [MailingController::class, 'sendEmail'])->name('test.email');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// Protected routes
Route::middleware(['auth'])->group(function () {
    // Common routes for all authenticated users
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

?>