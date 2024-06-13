<?php
  
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
  
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CartController;

use App\Http\Controllers\Auth\LoginController;



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
  
Auth::routes();
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin/halamanadmin', [AdminController::class, 'index'])->name('halamanadmin');
});
 
// routes/web.php
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


//controller product
Route::get('/products/create', [ProductsController::class, 'create'])->name('createproduct');
Route::post('/products/create', [ProductsController::class, 'store'])->name('createproduct');

Route::get('/products', [ProductsController::class, 'products'])->name('products');
Route::get('/products/read', [ProductsController::class, 'halamanreadproduct'])->name('halamanreadproduct');
Route::get('products/edit/{id}', [ProductsController::class, 'edit'])->name('editproduct');
Route::put('products/edit/{id}', [ProductsController::class, 'update'])->name('update');
Route::delete('/products/{id}', [ProductsController::class, 'destroyproduct'])->name('destroyproduct');

//checkout
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'beli'])->name('checkout');
Route::post('/proses-checkout', [CheckoutController::class, 'processCheckout'])->name('proses.checkout');
Route::get('/terima-kasih', function () {
    return view('terima_kasih');
})->name('terima.kasih');

