<?php

use App\Http\Controllers\CarrerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserMessageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
})->name('ABOUT');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('PRIVACY');

Route::get('/dashboard', [UserMessageController::class, 'messages'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/careers', [CarrerController::class, 'index'])->name('CAREERS');

Route::get('/contact', [UserMessageController::class, 'index'])->name('CONTACT');


Route::post('/contact/send', [UserMessageController::class, 'store'])->name('SEND-MESSAGE');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';