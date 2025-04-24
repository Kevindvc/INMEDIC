<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\DoctorController;

Route::get('/', function () {
    return view('welcome');
});

// Ruta login de prueba
Route::get('/login', function () {
    return "Ruta login de prueba, contrasenia recuperada exitosamente";
})->name('login');
// Ruta para recuperacion de contrasenias
Route::get('password/forgot', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
//Ruta para ver la lista de doctores
Route::get('/doctores', [DoctorController::class, 'index'])->name('doctores.index');
//Ruta para ver un doctor en especifico
Route::get('/doctores/{doctor}', [DoctorController::class, 'show'])->name('doctores.show');
//Ruta para landing page
Route::get('/landing', function () {
    return view('landing');
})->name('landing');
//Ruta pregutas frecuentes
Route::get('/faq', function () {
    return view('faq');
})->name('faq');
// Ruta login de prueba
Route::get('/login', function () {
    return view('login');
})->name('login');
//Ruta contactanos
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');
//Ruta nosotros
Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');