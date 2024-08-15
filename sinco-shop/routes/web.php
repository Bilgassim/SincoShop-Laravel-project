<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

Route::get('/',[homeController::class,"index"])->name('home');

// Pour la gestion des produits
Route::get('/produits', [ProductController::class, 'index'])->name('produits.index');
Route::get('/produits/create', [ProductController::class, 'create'])->name('produits.create');
Route::post('/produits', [ProductController::class, 'store'])->name('produits.store');
Route::get('/produits/{id}', [ProductController::class, 'show'])->name('produits.show');
Route::get('/produits/{id}/edit', [ProductController::class, 'edit'])->name('produits.edit');
Route::put('/produits/{id}', [ProductController::class, 'update'])->name('produits.update');
Route::delete('/produits/{id}', [ProductController::class, 'destroy'])->name('produits.destroy');

// Routes pour la gestion des commandes
Route::get('/commandes', [OrderController::class, 'index'])->name('commandes.index');
Route::get('/commandes/create', [OrderController::class, 'create'])->name('commandes.create');
Route::post('/commandes', [OrderController::class, 'store'])->name('commandes.store');
Route::get('/commandes/{id}', [OrderController::class, 'show'])->name('commandes.show');
Route::get('/commandes/{id}/edit', [OrderController::class, 'edit'])->name('commandes.edit');
Route::put('/commandes/{id}', [OrderController::class, 'update'])->name('commandes.update');
Route::delete('/commandes/{id}', [OrderController::class, 'destroy'])->name('commandes.destroy');

//  Routes pour la gestion des fournisseurs
Route::get('/fournisseurs', [SupplierController::class, 'index'])->name('fournisseurs.index');
Route::get('/fournisseurs/create', [SupplierController::class, 'create'])->name('fournisseurs.create');
Route::post('/fournisseurs', [SupplierController::class, 'store'])->name('fournisseurs.store');
Route::get('/fournisseurs/{id}', [SupplierController::class, 'show'])->name('fournisseurs.show');
Route::get('/fournisseurs/{id}/edit', [SupplierController::class, 'edit'])->name('fournisseurs.edit');
Route::put('/fournisseurs/{id}', [SupplierController::class, 'update'])->name('fournisseurs.update');
Route::delete('/fournisseurs/{id}', [SupplierController::class, 'destroy'])->name('fournisseurs.destroy');

// Route pour le tableau de bord (Dashboard)
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Route pour les rapports ou l'analyse des stocks
Route::get('/rapports', [ReportController::class, 'index'])->name('rapports.index');