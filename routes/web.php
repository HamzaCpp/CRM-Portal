<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\BlankController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FontController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjectController;
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

Route::get('/index', [IndexController::class , 'show'])->name('index');
Route::get('/', [IndexController::class , 'show'])->name('index');
Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard');
Route::get('/profile' , [ProfileController::class , 'show'])->name('profile');
Route::get('/blank' , [ProfileController::class , 'show'])->name('blank');
Route::get('/font' , [FontController::class, 'show'])->name('font');
Route::get('/map' , [MapController::class, 'show'])->name('map');
Route::get('/404' , [ErrorController::class, 'show'])->name('404');

Route::get('/client',[ClientController::class,'show'])->name('client');
Route::get('/create',[ClientController::class,'index'])->name('create');
Route::post('/create', [ClientController::class,'create'])->name('create');
Route::get('edit/{id}', [ClientController::class,'edit'])->name('edit');
Route::post('edit/{id}', [ClientController::class,'update'])->name('update');
Route::get('delete/{id}', [ClientController::class,'destroy'])->name('delete');

Route::get('/project',[ProjectController::class,'show'])->name('project');
Route::get('/projects/createp',[ProjectController::class,'create'])->name('createp');
Route::post('/createp', [ProjectController::class,'store'])->name('createProject');
Route::get('editp/{id}', [ProjectController::class,'edit'])->name('editp');
Route::post('editp/{id}', [ProjectController::class,'update'])->name('updatep');
Route::get('deletep/{id}', [ProjectController::class,'destroy'])->name('deletep');
