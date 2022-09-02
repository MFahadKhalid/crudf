<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;


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

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Company

Route::get('company', [CompanyController::class , 'index'])->name('company.index');
Route::get('company/create' , [CompanyController::class , 'create'])->name('company.create');
Route::post('company/store' , [CompanyController::class , 'store'])->name('company.store');
Route::get('company/{id}/edit', [CompanyController::class, 'edit'])->name('company.edit');
Route::post('company/{id}/update', [CompanyController::class, 'update'])->name('company.update');
Route::get('company/{id}/delete', [CompanyController::class, 'delete'])->name('company.delete');

// Department

Route::get('department', [DepartmentController::class , 'index'])->name('department.index');
Route::get('department/create' , [DepartmentController::class , 'create'])->name('department.create');
Route::post('department/store' , [DepartmentController::class , 'store'])->name('department.store');
Route::get('department/{id}/edit', [DepartmentController::class, 'edit'])->name('department.edit');
Route::post('department/{id}/update', [DepartmentController::class, 'update'])->name('department.update');
Route::get('department/{id}/delete', [DepartmentController::class, 'delete'])->name('department.delete');

// Employee

Route::get('employee', [EmployeeController::class , 'index'])->name('employee.index');
Route::get('employee/create' , [EmployeeController::class , 'create'])->name('employee.create');
Route::post('employee/store' , [EmployeeController::class , 'store'])->name('employee.store');
Route::get('employee/{id}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::post('employee/{id}/update', [EmployeeController::class, 'update'])->name('employee.update');
Route::get('employee/{id}/delete', [EmployeeController::class, 'delete'])->name('employee.delete');