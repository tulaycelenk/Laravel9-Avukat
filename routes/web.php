<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\HomeController as adminHomeController;
use App\Http\Controllers\Admin\CategoryController as adminCategoryController;

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
Route::get('/contact.html', [HomeController::class,'contact'])->name('contact');
Route::get('/about.html', [HomeController::class,'about'])->name('about');
Route::get('/team.html', [HomeController::class,'team'])->name('team');
Route::get('/blog.html', [HomeController::class,'blog'])->name('blog');
Route::get('/service.html', [HomeController::class,'service'])->name('service');
Route::get('/single.html', [HomeController::class,'single'])->name('single');
Route::get('/portfolio.html', [HomeController::class,'portfolio'])->name('portfolio ');
Route::get('/test', [HomeController::class,'test'])->name('test');
Route::get('/prm/{id}/{number}', [HomeController::class,'param'])->name('param');
Route::post('/save', [HomeController::class,'save'])->name('save');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/admin',[adminHomeController::class,'index'])->name('admin');
//ADMIN CATEGORY ROUTE
Route::get('/admin/category',[adminCategoryController::class,'index'])->name('admin_cat_index');
Route::get('/admin/category/create',[adminCategoryController::class,'create'])->name('admin_cat_create');
Route::post('/admin/category/store',[adminCategoryController::class,'store'])->name('admin_cat_store');
Route::get('/admin/category/edit/{id}',[adminCategoryController::class,'edit'])->name('admin_cat_edit');
Route::post('/admin/category/update/{id}',[adminCategoryController::class,'update'])->name('admin_cat_update');
Route::get('/admin/category/destroy/{id}',[adminCategoryController::class,'destroy'])->name('admin_cat_destroy');
Route::get('/admin/category/show/{id}',[adminCategoryController::class,'show'])->name('admin_cat_show');
