<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;

route::middleware(['auth'])->group(function() {
    Route::get('/', fn () => view('index'));
    route::resource('/employee', EmployeeController::class);
    route::get('/attendance/clockout', [AttendanceController::class, 'edit'])->name('edit.attendance');
    route::resource('/attendance', AttendanceController::class);
    route::post('/logout', [LogoutController::class, 'store'])->name('logout');
});

route::middleware(['guest'])->group(function() {
    route::get('/login', fn() => view('auth/login'))->name('login');
    route::post('/login', [LoginController::class, 'authenticate']);
});