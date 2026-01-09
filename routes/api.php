<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MensajesController;

Route::post('/mensajes', [MensajesController::class, 'store']);