<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::livewire('/admin/dashboard', 'pages::admin.dashboard');
Route::livewire('/admin/barang', 'pages::admin.barang');