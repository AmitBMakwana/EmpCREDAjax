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
    return view('welcome');
});

Route::resource('employees', App\Http\Controllers\EmployeeController::class);

// Route::get('/', [EmployeeController::class,'index'])->name('employees.index');
// Route::post('/employees', [EmployeeController::class,'store'])->name('employees.store');
// Route::get('/employees/{id}', [EmployeeController::class,'show'])->name('employees.show');
// Route::put('/employees/{id}', [EmployeeController::class,'update'])->name('employees.update');
// Route::delete('/employees/{id}', [EmployeeController::class,'destroy'])->name('employees.destroy');