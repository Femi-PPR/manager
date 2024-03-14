<?php

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
    return view('index');
});

Route::get('/companies', [App\Http\Controllers\CompanyController::class, 'index']);
Route::get('/companies/{company}', [App\Http\Controllers\CompanyController::class, 'show'])->whereNumber('company');

Route::middleware('auth')->group(function () {
    Route::get('/companies/create', [App\Http\Controllers\CompanyController::class, 'create'])->name('company.create');
    Route::post('/companies', [App\Http\Controllers\CompanyController::class, 'store'])->name('company.store');
});

Route::get('/employees', [App\Http\Controllers\EmployeeController::class, 'index']);
Route::get('/employees/{employee}', [App\Http\Controllers\EmployeeController::class, 'show']);


Auth::routes([
    'register' => false,
    'reset' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
