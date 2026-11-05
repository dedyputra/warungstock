<?php

use Illuminate\Support\Facades\Route;

// Sementara tanpa login supaya bisa langsung dicek tampilannya.
Route::view('/', 'pages.dashboard')->name('dashboard');
