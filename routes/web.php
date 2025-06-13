<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Admin\AdminTicketController;

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

// Main site routes
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Аутентификация пользователей
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Личный кабинет
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Маршруты для заявок
    Route::resource('tickets', TicketController::class);

    // Маршруты для сообщений
    Route::post('tickets/{ticket}/messages', [MessageController::class, 'store'])->name('tickets.messages.store');
    Route::post('tickets/{ticket}/messages/mark-as-read', [MessageController::class, 'markAsRead'])->name('tickets.messages.mark-as-read');
});

// Маршруты для тикетов
Route::middleware(['auth'])->group(function () {
    Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');
    Route::get('/tickets/create', [TicketController::class, 'create'])->name('tickets.create');
    Route::post('/tickets', [TicketController::class, 'store'])->name('tickets.store');
    Route::get('/tickets/{ticket}', [TicketController::class, 'show'])->name('tickets.show');
    
    // Маршруты для сообщений
    Route::post('/tickets/{ticket}/messages', [MessageController::class, 'store'])->name('tickets.messages.store');
    Route::get('/tickets/{ticket}/messages', [MessageController::class, 'index'])->name('tickets.messages.index');
    Route::patch('/tickets/{ticket}/messages/{message}/read', [MessageController::class, 'markAsRead'])->name('tickets.messages.read');
});

// Маршруты для админ-панели
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/tickets', [AdminTicketController::class, 'index'])->name('tickets.index');
    Route::get('/tickets/{ticket}', [AdminTicketController::class, 'show'])->name('tickets.show');
    Route::patch('/tickets/{ticket}/status', [AdminTicketController::class, 'updateStatus'])->name('tickets.status');
    
    // Маршруты для сообщений в админ-панели
    Route::post('/tickets/{ticket}/messages', [MessageController::class, 'store'])->name('tickets.messages.store');
    Route::get('/tickets/{ticket}/messages', [MessageController::class, 'index'])->name('tickets.messages.index');
    Route::patch('/tickets/{ticket}/messages/{message}/read', [MessageController::class, 'markAsRead'])->name('tickets.messages.read');
});
