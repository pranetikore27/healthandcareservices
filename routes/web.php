<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TrialController;
use App\Http\Controllers\BlogController;

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

Route::get('add-new-listings', function() {
    return view('add-new-listings'); 
}); 


Route::get('faqs', function() {
    return view('faqs'); 
}); 

// Route::get('/vendor-listings', [VendorController::class, 'show'])->name('vendor-listings');


// Route::get("out", function(){
//     Auth::logout(); 
//         return redirect("home"); 
// }); 
// Auth::routes(['register' => false]);

Route::group(['middleware' => ['auth']], function() {

    Route::get("createvendorprofile", function(){
        return view("create/vendor/profile"); 
    }); 

    Route::resource('/', HomeController::class);
    
    Route::resource('roles', RoleController::class);
    
    Route::resource('users', UserController::class);
    
    Route::resource('products', ProductController::class);
    // Route::resource('complaints', ComplaintController::class);
    // Route::resource('products', ProductController::class);

    Route::resource('category', CategoryController::class);
    Route::resource('reviews', ReviewController::class);

    Route::resource('hivendors', VendorController::class);
    Route::resource('partners', PartnerController::class);
    Route::resource('offer-services', ServiceController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('location', LocationController::class);
    Route::resource('hospitals', HospitalController::class);
    Route::resource('complaints', ComplaintController::class);
    // Route::resource('category', CategoryController::class);
    // Route::resource('categories', CategoriesController::class);
    // Route::resource('payment', PaymentController::class);
    
    // Route::get('/', [HomeController::class, 'index']);
    Route::get('prof', [ProfController::class, 'index']);
    

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/payment', [PaymentController::class, 'index'])->name('payment');
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    
    // Route::get('/services', [ServiceController::class, 'index'])->name('services');
    // Route::get('services/create', [ServiceController::class, 'create'])->name('/services/create');
    // Route::get('/services/{id}/show', [ServiceController::class, 'show'])->name('services');
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/partners', [PartnerController::class, 'index'])->name('partners');
    Route::get('/hivendors', [VendorController::class, 'index'])->name('hivendors');
    
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


Route::get('/profile/vendor', function () {
    return view('profile/vendor');
});

});

// Route::get('/', function () {
    // return view('guest/home');
// });

// Route::resource('/guest', GuestController::class);


Route::get('/page-submit-listing', function () {
    return view('page-submit-listing');
});

// Route::resource('/', GuestController::class);
// Route::post('category-listings', [GuestController::class, 'show'])->name('category-listings');
// Route::get('/', "GuestController@index");
// Route::get('/', [GuestController::class, 'index'])->name('/');

Route::resource('/', GuestController::class);

Route::get('/service-listings', [ServiceController::class, 'listings'])->name('service-listings');
Route::get('/out', [LoginController::class, 'logout'])->name('out');
Route::post('/search', [GuestController::class, 'store'])->name('search');

Route::resource("trial", TrialController::class); 
Route::resource("blog", BlogController::class); 

