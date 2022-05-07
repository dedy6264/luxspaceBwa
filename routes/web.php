<?php
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductGalleryController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
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
Route::get('/home',[FrontendController::class,'index'])->name('index');
Route::get('/detail/{id}',[FrontendController::class,'detail'])->name('detail');
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->name('dashboard.')->prefix('dashboard')->group(function(){
    Route::get('/',[DashboardController::class,'index'])->name('index');
    // Route::get('/',[DashboardController::class,'product'])->name('product');
    Route::middleware(['admin'])->group(function(){
    Route::resource('product',ProductController::class);
    Route::resource('product.gallery',ProductGalleryController::class)->shallow()->only(['index','create','store','destroy']);
    Route::resource('transaction',TransactionController::class)->shallow()->only(['index','show','edit','update','store','destroy']);
    Route::resource('user',UserController::class)->shallow()->only(['index','show','edit','update','store','destroy','create']);
    // Route::resource('/transaction', TransactionController::class)->except(['create','edit']);

    });
});

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/cart',[FrontendController::class,'cart'])->name('cart');
    Route::post('/cart/{id}',[FrontendController::class,'cartAdd'])->name('cart-add');
    Route::delete('/cart/{id}',[FrontendController::class,'cartDestroy'])->name('cart-delete');

});
