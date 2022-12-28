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
use App\Http\Controllers\ProfController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PaymentController; 
use App\Http\Controllers\ComplaintController; 
use App\Http\Controllers\LocationController; 
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


Auth::routes();
  
// Auth::routes(['register' => false]);

Route::group(['middleware' => ['auth']], function() {

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    // Route::resource('complaints', ComplaintController::class);
    // Route::resource('products', ProductController::class);

    
    Route::resource('hivendors', VendorController::class);
    Route::resource('partners', PartnerController::class);
    Route::resource('offer-services', ServiceController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('location', LocationController::class);
    // Route::resource('payment', PaymentController::class);
    
    Route::get('/', [HomeController::class, 'index']);
    Route::get('prof', [ProfController::class, 'index']);
    

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/payment', [PaymentController::class, 'index'])->name('payment');
    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    // Route::get('/services', [ServiceController::class, 'index'])->name('services');
    // Route::get('services/create', [ServiceController::class, 'create'])->name('/services/create');
    // Route::get('/services/{id}/show', [ServiceController::class, 'show'])->name('services');
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/partners', [PartnerController::class, 'index'])->name('partners');
    Route::get('/hivendors', [VendorController::class, 'index'])->name('hivendors');
    // Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    
    // Route::resource('roles', RoleController::class);
    // Route::resource('users', UserController::class);
    // Route::resource('products', ProductController::class);
    // Route::resource('hello', ProductController::class);

    // Route::resource('partners', PartnerController::class);
    // Route::resource('category', CategoryController::class);
    // Route::resource('partners', PartnerController::class);

    
// Route::get('importExportView', [MyController::class, 'importExportView']);
// Route::get('export', [MyController::class, 'export'])->name('export');
// Route::post('import', [MyController::class, 'import'])->name('import');

});

Route::get('/', function () {
    return view('guest/home');
});

Route::get('/page-submit-listing', function () {
    return view('page-submit-listing');
});


Route::get('/service-listings', [ServiceController::class, 'listings'])->name('service-listings');

Route::post('/search', [GuestController::class, 'store'])->name('search');
