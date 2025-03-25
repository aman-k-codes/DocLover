<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DocsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('Layout.master');
// });

Route::prefix('/')->group(function () {
    Route::prefix('/')->group(function () {
        Route::get('/', [HomeController::class, 'Home'])->name('home.index');
        Route::get('/all-tools', [HomeController::class, 'AllTools'])->name('home.AllTools');
    });
    Route::prefix('/docs')->group(function () {
        Route::get('/pdf-to-png', [DocsController::class, 'PDFtoPNG'])->name('docs.PDFtoPNG');
    });
});
