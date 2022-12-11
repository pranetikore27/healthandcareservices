<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\VendorController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GuestController;

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
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [GuestController::class, 'index'])->name('/');

Auth::routes();
  
 
Route::group(['middleware' => ['auth']], function() {

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);

    
    Route::resource('hivendors', VendorController::class);
    Route::resource('partners', PartnerController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('category', CategoryController::class);
    
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::get('/services', [ServiceController::class, 'index'])->name('services');
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/partners', [PartnerController::class, 'index'])->name('partners');
    Route::get('/hivendors', [VendorController::class, 'index'])->name('hivendors');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    
    // Route::resource('roles', RoleController::class);
    // Route::resource('users', UserController::class);
    // Route::resource('products', ProductController::class);
    // Route::resource('hello', ProductController::class);

    // Route::resource('partners', PartnerController::class);
    // Route::resource('category', CategoryController::class);
    // Route::resource('partners', PartnerController::class);
});