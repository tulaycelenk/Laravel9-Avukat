<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\HomeController as adminHomeController;
use App\Http\Controllers\Admin\CategoryController as adminCategoryController;
use App\Http\Controllers\Admin\ServiceController as adminServiceController;

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


// ADMIN PANEL ROUTES
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/',[adminHomeController::class,'index'])->name('index');
    //ADMIN CATEGORY ROUTE
    Route::prefix('/category')->name('category.')->controller(adminCategoryController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');

    });

    //ADMIN SERVICE ROUTE
    Route::prefix('/service')->name('service.')->controller(adminServiceController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');

    });
});
