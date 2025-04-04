<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/contato', [MainController::class, 'agendarContato'])->name('agendar-contato');
