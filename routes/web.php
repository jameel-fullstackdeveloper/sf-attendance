<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'dashboard']);
Route::get('/dashboard',[HomeController::class,'dashboard']);
Route::get('/employeeList',[HomeController::class,'employeeList']);
Route::get('/employee-attendace/{slug}', [HomeController::class, 'employeeAttendance'])->name('employee.attendace.show');
Route::get('/employees/{slug}', [HomeController::class, 'employees'])->name('employees.show');
// Route::get('/employees/{slug}', [HomeController::class, 'employees'])->name('employees.show');
