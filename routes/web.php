<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

# Route::get('/', fn (): View => view('welcome'));
Route::get("/", HomeController::class)->name("home");
