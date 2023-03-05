<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdModelController;
use App\Http\Controllers\AdPostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('home.index');
})->name('home');

Auth::routes();

Route::get('/redirect', [LoginController::class,'redirectToProvider'])->name('redirect');
Route::get('/facebook/redirect', [LoginController::class,'redirectToFacebook'])->name('redirect.facebook');
Route::get('/callback', [LoginController::class,'handleProviderCallback'])->name('callback');
Route::get('facebook/callback', [LoginController::class,'handleFacebookCallback'])->name('callback.facebook');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

    Route::get('/category', [CategoryController::class,'index'])->name('category');
    Route::post('/category', [CategoryController::class,'store'])->name('category.store');
    Route::get('/edit-category/{id}', [CategoryController::class,'edit'])->name('category.edit');
    Route::post('/update-category', [CategoryController::class,'update'])->name('category.update');

    Route::get('/models', [AdModelController::class,'index'])->name('models');
    Route::post('/models', [AdModelController::class,'store'])->name('models.store');
    Route::get('/edit-models/{id}', [AdModelController::class,'edit'])->name('models.edit');
    Route::post('/update-models', [AdModelController::class,'update'])->name('models.update');


    Route::get('/users', [UserController::class,'index'])->name('users');

    Route::get('/admin/adpost', [AdPostController::class,'adminIndex'])->name('adpost.admin');
    Route::get('/admin/edit-adpost/{id}', [AdPostController::class,'adpostStatus'])->name('adpost.edit');
    Route::post('/admin/update-adpost', [AdPostController::class,'adpoststatusUpdate'])->name('adpost.update');

    Route::get('/ad-post', [AdPostController::class,'index'])->name('ad-post');
    Route::get('/ad-post-create', [AdPostController::class,'create'])->name('ad-post.create');
    Route::post('/ad-post-store', [AdPostController::class,'store'])->name('ad-post.store');
    Route::get('/ad-post-edit', [AdPostController::class,'edit'])->name('ad-post.edit');
    Route::post('/ad-post-update', [AdPostController::class,'update'])->name('ad-post.update');



});


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
