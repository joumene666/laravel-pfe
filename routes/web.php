<?php

use App\Http\Controllers\AdherentController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StructureController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('/gestion-des-adhérents', [AdherentController::class, 'index'])->middleware(['auth'])->name('adherent.index');

Route::get('/gestion-financiere', [FinanceController::class, 'index'])->middleware(['auth'])->name('financiere.index');

Route::get('/gestion-des-adhérents/créer', [AdherentController::class, 'create'])->middleware(['auth'])->name('adherent.create');

Route::get('/gestion-financiere/créer', [FinanceController::class, 'create'])->middleware(['auth'])->name('finances.create');

Route::get('/gestion-des-adhérents/{id}', [AdherentController::class, 'show'])->middleware(['auth'])->name('adherent.show');



Route::get('/gestion-des-structures', [StructureController::class, 'index'])->middleware(['auth'])->name('structures.index');

Route::get('/gestion-des-structures/créer', [StructureController::class, 'create'])->middleware(['auth'])->name('structures.create');

Route::post('/gestion-des-structures', [StructureController::class, 'store'])->middleware(['auth'])->name('structures.store');


Route::post('/gestion-des-adhérents', [AdherentController::class, 'store'])->middleware(['auth'])->name('adherent.store');


require __DIR__.'/auth.php';
