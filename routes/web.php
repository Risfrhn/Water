<?php

use Illuminate\Support\Facades\Route;

// Admin
Route::livewire('/admin/dashboard', 'pages::admin.dashboard');
Route::livewire('/admin/barang', 'pages::admin.barang');
Route::livewire('/admin/blog', 'pages::admin.blog');
Route::livewire('/admin/promo', 'pages::admin.promo');

// User
Route::livewire('/', 'pages::user.landing-page');