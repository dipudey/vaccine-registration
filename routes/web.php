<?php

use App\Http\Controllers\CenterController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

require __DIR__ . '/auth.php';

Route::group(["middleware" => ["auth"]], function () {
    Route::get('/dashboard', [DashboardController::class, "index"])->name('dashboard');

    Route::get("/center", CenterController::class)->name("center.index");
});
