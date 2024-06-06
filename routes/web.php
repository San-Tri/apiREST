<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// routes/web.php
use App\Http\Controllers\ProductoController;

Route::resource('productos', ProductoController::class);
