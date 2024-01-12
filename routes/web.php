<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('custom-login', [LoginController::class, 'customLogin'])->name('login.custom');
Route::get('register', [LoginController::class, 'registration'])->name('register');
Route::post('custom-registration', [LoginController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [LoginController::class, 'signOut'])->name('signout');

Route::get('/loginPage', function () {
    return view('Auth/login');
});

Route::get('/asd', function () {
    return view('dashboard');
});
