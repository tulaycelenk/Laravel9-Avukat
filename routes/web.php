<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\HomeController as adminHomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class,'index'])->name('index');
Route::get('/test', [HomeController::class,'test'])->name('test');
Route::get('/prm/{id}/{number}', [HomeController::class,'param'])->name('param');
Route::post('/save', [HomeController::class,'save'])->name('save');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/admin',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin');

