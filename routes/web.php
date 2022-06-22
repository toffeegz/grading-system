<?php

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

// 
Route::group(['namespace' => 'App\Http\Livewire'], function() {
    Route::get('/', Guest\LandingPageComponent::class)->name('landing-page');
});

// administrator and instructor
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::group(['namespace' => 'App\Http\Livewire'], function() {
        Route::get('dashboard', Dashboard\DashboardComponent::class)->name('dashboard');
    });
});

require __DIR__.'/auth.php';
