<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\EtudiantController;
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
Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::get('/logout', [AuthManager::class, 'Logout'])->name('logout');
Route::post('/login', [AuthManager::class, 'LoginPost'])->name('login.post');
Route::get('/registration', [AuthManager::class, 'registration'])->name('registration');
Route::post('/registration', [AuthManager::class, 'RegistrationPost'])->name('registration.post');

Route::resource('etudiants', EtudiantController::class);
