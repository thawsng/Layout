<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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

Route::get('/admin/index', [AdminController::class, 'showIndex']);
Route::get('/admin/list', [AdminController::class, 'showList']);
Route::get('/admin/form', [AdminController::class, 'showForm']);
Route::get('/admin/calendar', [AdminController::class, 'showCalendar']);
Route::get('/admin/ui', [AdminController::class, 'showUi']);
