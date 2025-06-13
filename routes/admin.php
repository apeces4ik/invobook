<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\TicketController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:admin')->group(function () {
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AuthController::class, 'login'])->name('admin.login.submit');
});

Route::middleware('auth:admin')->group(function () {
    Route::post('logout', [AuthController::class, 'logout'])->name('admin.logout');
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Маршруты для управления заявками
    Route::get('tickets', [TicketController::class, 'index'])->name('admin.tickets.index');
    Route::get('tickets/{ticket}', [TicketController::class, 'show'])->name('admin.tickets.show');
    Route::patch('tickets/{ticket}/status', [TicketController::class, 'updateStatus'])->name('admin.tickets.update-status');

    // Маршруты для сообщений
    Route::post('tickets/{ticket}/messages', [MessageController::class, 'store'])->name('admin.tickets.messages.store');
    Route::post('tickets/{ticket}/messages/mark-as-read', [MessageController::class, 'markAsRead'])->name('admin.tickets.messages.mark-as-read');
}); 