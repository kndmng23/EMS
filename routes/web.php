<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmphistoryController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\DashboardController;
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
    return redirect()->route('login');
})->name('/');

Route::view('index', 'index')->name('index');

//Authentication
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
Route::get('/sign-up', [AuthController::class, 'sign_up'])->name('sign-up');
Route::post('/sign-up', [AuthController::class, 'sign_upPost'])->name('sign-up.post');
Route::get('/forgot-password', [AuthController::class, 'forgot_password'])->name('forgot-password');

//====================================== EMPLOYEE PROFILE ============================================================================//
Route::get('/employee-profiles', [EmployeeController::class, 'index'])->name('employee.index');
Route::get('/employment-histories', [EmployeeController::class, 'emphistories'])->name('employee.emphistories');
Route::get('/employee-profiles/create', [EmployeeController::class, 'create'])->name('employee.create');
Route::post('/employee-profile', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('/employee-profile/{employee}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::get('/employee-profile/{employee}/show', [EmployeeController::class, 'show'])->name('employee.show');
Route::put('/employee-profile/{employee}/update',[EmployeeController::class, 'update'])->name('employee.update');
Route::delete('/employee-profile/{employee}/destroy', [EmployeeController::class, 'destroy'])->name('employee.destroy');
Route::get('/search', [EmployeeController::class, 'search']);


//======================================= Employment History ==========================================================================//

Route::get('/employment-history', [EmphistoryController::class, 'index'])->name('emphistory.index');
Route::get('/employment-history/create', [EmphistoryController::class, 'create'])->name('emphistory.create');
Route::post('/employment-history', [EmphistoryController::class, 'store'])->name('emphistory.store');
Route::get('/employment-history/{emphistory}/edit', [EmphistoryController::class, 'edit'])->name('emphistory.edit');
Route::put('/employment-history/{emphistory}/update',[EmphistoryController::class, 'update'])->name('emphistory.update');
Route::delete('/employment-history/{emphistory}/destroy', [EmphistoryController::class, 'destroy'])->name('emphistory.destroy');

//aayusin pataas======================================== PAYROLL HISTORY ================================================================================//

Route::get('/payroll-history',[PayrollController::class, 'index'])->name('payroll.index');
Route::get('/payroll-history/create', [PayrollController::class, 'create'])->name('payroll.create');
Route::post('/payroll-history', [PayrollController::class, 'store'])->name('payroll.store');
Route::get('/payroll-history/{payroll}/edit', [PayrollController::class, 'edit'])->name('payroll.edit');
Route::put('/payroll-history/{payroll}/update',  [PayrollController::class, 'update'])->name('payroll.update'); 
Route::delete('/payroll-history/{payroll}/destroy', [PayrollController::class, 'destroy'])->name('payroll.destroy');
Route::get('payroll-history/{payroll}/show' , [PayrollController::class, 'show'])->name('payroll.show');

//========================================= TIME AND SCHEDULING RECORD ================================================================================//

Route::get('/time-and-scheduling-record',[ScheduleController::class, 'index'])->name('schedule.index');
Route::get('/time-and-scheduling-record/create',[ScheduleController::class, 'create'])->name('schedule.create');
Route::post('/time-and-scheduling-record',[ScheduleController::class, 'store'])->name('schedule.store');
Route::get('/time-and-scheduling-record/{schedule}/edit',[ScheduleController::class, 'edit'])->name('schedule.edit');
Route::put('/time-and-scheduling-record/{schedule}/update',  [ScheduleController::class, 'update'])->name('schedule.update'); 
Route::delete('/time-and-scheduling-record/{schedule}/destroy', [ScheduleController::class, 'destroy'])->name('schedule.destroy');

//========================================== JOB DESCRIPTION AND POSITION ==================================================================================//
Route::get('/job-description-and-position' ,[PositionController::class, 'index'])->name('position.index');
Route::get('/job-description-and-position/create' ,[PositionController::class, 'create'])->name('position.create');
Route::post('/job-description-and-position' ,[PositionController::class, 'store'])->name('position.store');
Route::get('/job-description-and-position/{position}/edit',[PositionController::class, 'edit'])->name('position.edit');
Route::put('/job-description-and-position/{position}/update',  [PositionController::class, 'update'])->name('position.update');
Route::delete('/job-description-and-position/{position}/destroy', [PositionController::class, 'destroy'])->name('position.destroy');

//========================================== DATA AUDITING AND REPORTING ==================================================================================//




