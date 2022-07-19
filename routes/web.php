<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MedidaController;
use App\Http\Controllers\RecetaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\IngredienteController;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {return view('index');})->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
Route::post('/admin/create', [AdminController::class, 'store']);
Route::get('/admin/update', [AdminController::class, 'edit'])->name('admin.update');
Route::post('/admin/update', [AdminController::class, 'update']);

Route::get('/empleado', [EmpleadoController::class, 'index'])->name('empleado.index');
Route::get('/empleado/create', [EmpleadoController::class, 'create'])->name('empleado.create');
Route::post('/empleado/create', [EmpleadoController::class, 'store']);
Route::get('/empleado/update', [EmpleadoController::class, 'edit'])->name('empleado.update');
Route::post('/empleado/update', [EmpleadoController::class, 'update']);

Route::get('/cliente/create', [ClienteController::class, 'create'])->name('cliente.create');
Route::post('/cliente/create', [ClienteController::class, 'store']);
Route::get('/cliente/update', [ClienteController::class, 'edit'])->name('cliente.update');
Route::post('/cliente/update', [ClienteController::class, 'update']);
Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente.index');

Route::get('/usuario', [UsuarioController::class, 'index'])->name('usuario.index');

Route::get('/medida', [MedidaController::class, 'index'])->name('medida.index');
Route::get('/medida/create', [MedidaController::class, 'create'])->name('medida.create');
Route::post('/medida/create', [MedidaController::class, 'store']);
Route::get('/medida/{id}', [MedidaController::class, 'edit'])->name('medida.update');
Route::post('/medida/update', [MedidaController::class, 'update']);

Route::get('/ingrediente', [IngredienteController::class, 'index'])->name('ingrediente.index');
Route::get('/ingrediente/create', [IngredienteController::class, 'create'])->name('ingrediente.create');
Route::post('/ingrediente/create', [IngredienteController::class, 'store']);
Route::get('/ingrediente/{id}', [IngredienteController::class, 'edit'])->name('ingrediente.update');
Route::post('/ingrediente/update', [IngredienteController::class, 'update']);

Route::get('/receta', [RecetaController::class, 'index'])->name('receta.index');
Route::get('/receta/create', [RecetaController::class, 'create'])->name('receta.create');
Route::post('/receta/create', [RecetaController::class, 'store']);
Route::get('/receta/update', [RecetaController::class, 'edit'])->name('receta.update');
Route::post('/receta/update', [RecetaController::class, 'update']);

Route::get('/producto', [ProductoController::class, 'index'])->name('producto.index');
Route::get('/producto/create', [ProductoController::class, 'create'])->name('producto.create');
Route::post('/producto/create', [ProductoController::class, 'store']);
Route::get('/producto/update', [ProductoController::class, 'edit'])->name('producto.update');
Route::post('/producto/update', [ProductoController::class, 'update']);
Route::delete('/producto/{id}', [ProductoController::class, 'destroy'])->name('producto.delete');


Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria.index');
Route::get('/categoria/create', [CategoriaController::class, 'create'])->name('categoria.create');
Route::post('/categoria/create', [CategoriaController::class, 'store']);
Route::get('/categoria/update', [CategoriaController::class, 'edit'])->name('categoria.update');
Route::post('/categoria/update', [CategoriaController::class, 'update']);
Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy'])->name('categoria.delete');