<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KecakController;
use Illuminate\Support\Facades\Route;

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
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('landing');
Route::get('/detail/{id}', [HomeController::class, 'detailPackages'])->name('detail');

Route::get('/dashboard', [KecakController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/package/create', [KecakController::class, 'create'])->middleware(['auth'])->name('package.create');
Route::post('/package/store', [KecakController::class, 'store'])->middleware(['auth'])->name('package.store');
Route::get('/package/{package}/edit', [KecakController::class, 'edit'])->middleware(['auth'])->name('package.edit');
Route::post('/package/{package}/update', [KecakController::class, 'update'])->middleware(['auth'])->name('package.update');
Route::get('/package/{package}/delete', [KecakController::class, 'destroy'])->middleware(['auth'])->name('package.destroy');


// Login
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login');
// Logout
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
