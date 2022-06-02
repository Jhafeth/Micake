<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ClienteController;


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');


Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente.index');
Route::get('/cliente-create', [ClienteController::class, 'create'])->name('cliente.create');
Route::post('/cliente-create', [ClienteController::class, 'store']);
Route::get('/cliente-update', [ClienteController::class, 'edit'])->name('cliente.update');
Route::post('/cliente-update', [ClienteController::class, 'update']);

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin-create', [AdminController::class, 'create'])->name('admin.create');
Route::post('/admin-create', [AdminController::class, 'store']);
Route::get('/admin-update', [AdminController::class, 'edit'])->name('admin.update');
Route::post('/admin-update', [AdminController::class, 'update']);


