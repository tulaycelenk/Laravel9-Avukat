<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\HomeController as adminHomeController;
use App\Http\Controllers\Admin\CategoryController as adminCategoryController;
use App\Http\Controllers\Admin\ServiceController as adminServiceController;
use App\Http\Controllers\Admin\ImageController as adminImageController;
use App\Http\Controllers\Admin\FaqController as adminFAQController;
use App\Http\Controllers\Admin\AppointmentController as adminAppointmentController;

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
Route::post('/faq', [HomeController::class,'faq'])->name('faq');
Route::get('/loginuser', [HomeController::class,'loginuser'])->name('loginuser');
Route::get('/registeruser', [HomeController::class,'registeruser'])->name('registeruser');
Route::get('/logoutuser', [HomeController::class,'logoutuser'])->name('logoutuser');
Route::view('/lgnadmin', 'admin.login');
Route::get('/loginadmin', [HomeController::class,'loginadmin'])->name('loginadmin');

Route::get('/myAppointments', [HomeController::class,'myAppointments'])->name('myAppointments');
Route::get('/cancelAppointment/{id}', [adminAppointmentController::class,'cancel'])->name('cancelAppointment');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::post('/requestForAppointment', [HomeController::class,'requestForAppointment'])->name('requestForAppointment');

//service list page
Route::get('/category/{id}', [HomeController::class,'categoryListPage'])->name('categoryListPage');

//service detail page
Route::get('/service/{id}', [HomeController::class,'serviceDetailPage'])->name('serviceDetailPage');


// ADMIN PANEL ROUTES
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/',[adminHomeController::class,'index'])->name('index');
    Route::get('/setting',[adminHomeController::class,'setting'])->name('setting');
    Route::get('/setting',[adminHomeController::class,'settingUpdate'])->name('setting.update');
    //ADMIN CATEGORY ROUTES
    Route::prefix('/category')->name('category.')->controller(adminCategoryController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');

    });

    //ADMIN SERVICE ROUTES
    Route::prefix('/service')->name('service.')->controller(adminServiceController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');

    });
    //ADMIN SERVICE IMAGE GALLERY ROUTES
    Route::prefix('/image')->name('image.')->controller(adminImageController::class)->group(function () {
        Route::get('/{sid}','index')->name('index');
        Route::get('/create/{sid}','create')->name('create');
        Route::post('/store/{sid}','store')->name('store');
        Route::post('/update/{sid}/{id}','update')->name('update');
        Route::get('/destroy/{sid}/{id}','destroy')->name('destroy');


    });
    //ADMIN FAQ ROUTES
    Route::prefix('/faq')->name('faq.')->controller(adminFAQController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');

    });
    //ADMIN FAQ ROUTES
    Route::prefix('/message')->name('message.')->controller(adminFAQController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');

    });

    //ADMIN APPOINTMENT ROUTES
    Route::prefix('/appointment')->name('appointment.')->controller(adminAppointmentController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/approve_appointment/{id}', 'approve')->name('approve_appointment');
        Route::get('/decline_appointment/{id}', 'decline')->name('decline_appointment');

    });
});
