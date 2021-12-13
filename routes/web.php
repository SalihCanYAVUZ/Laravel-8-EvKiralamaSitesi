<?php

use App\Http\Controllers\Admin\HouseController;
use App\Http\Controllers\HomeController;
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

Route::get('/home2', function () {
    return view('welcome');
});
Route::redirect('/anasayfa', '/home')->name('anasayfa');

Route::get('/', function () {
    return view('home.index');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');

//ADMİN
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');
    //Category
    Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');


    //House
    Route::prefix('house')->group(function () {
        Route::get('/', [HouseController::class, 'index'])->name('admin_house');
        Route::get('create', [HouseController::class, 'create'])->name('admin_house_add');
        Route::post('store', [HouseController::class, 'store'])->name('admin_house_store');
        Route::get('edit/{id}', [HouseController::class, 'edit'])->name('admin_house_edit');
        Route::post('update/{id}', [HouseController::class, 'update'])->name('admin_house_update');
        Route::get('delete/{id}', [HouseController::class, 'destroy'])->name('admin_house_delete');
        Route::get('show', [HouseController::class, 'show'])->name('admin_house_show');
    });

    //image
    Route::prefix('image')->group(function () {
        Route::get('create/{house_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::post('store/{house_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('delete/{id}/{house_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
    });

    #Setting

    Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');
});




Route::get('/admin/login',[HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck',[HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout',[HomeController::class, 'logout'])->name('admin_logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
