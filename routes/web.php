<?php

use App\Http\Livewire\Welcome;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\ProductDetail;
use App\Http\Livewire\OrderComponent;
use App\Http\Livewire\PaymentDelivry;
use App\Http\Livewire\Storecomponent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\CategoryComponent;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PaymentController;
use App\Http\Livewire\CategortAppcomponent;
use App\Http\Livewire\OtherProductComponent;
use App\Http\Controllers\blog\blogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Order\OrderController;
use App\Http\Livewire\CategoryProductComponent;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Users\OrderviewController;
use App\Http\Controllers\Users\RegisteredController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\CineyPyayController;
use App\Http\Controllers\Coeur\LikeProductController;

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

//routes sans middleware
Route::get('/produits', Storecomponent::class)->name('sotre.index');
Route::get('/categories', CategoryComponent::class)->name('category.index');
Route::get('/cart', CartComponent::class)->name('cart.index');
Route::get('/product/detail/{id}', ProductDetail::class)->name('product.detail');
Route::get('/category/product/{slug}', CategoryProductComponent::class)->name('category.product');
Route::get('/other/product/{id}', OtherProductComponent::class)->name('similar.products');
Route::get('/blog', [HomeController::class, 'viewarticles'])->name('article.index');
Route::get('/presentation', function(){
    return view('actualy');
});

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::middleware(['auth'])->group(function() {
 Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/orders/liste/users', [OrderviewController::class, 'index'])->name('orders.users.liste');
Route::get('/commade-a-la-livraison', PaymentDelivry::class)->name('payment')->middleware('auth');
Route::get('/confirmed-payment-false', [PaymentController::class, 'createOrderBoll'])->name('check.paie');
Route::get('/orders', OrderComponent::class)->name('oders');
 Route::get('/orders/liste', [OrderController::class, 'index'])->name('oders.liste');
Route::get('/orders/detail/{id}', [OrderController::class, 'detail'])->name('orders.details');
Route::get('/orders/detail/user/{id}', [OrderController::class, 'detailorderUser'])->name('orders.details.users');
Route::get('/like/product/view', [LikeProductController::class, 'index'])->name('like.index');
Route::get('/orders/successful', function(){
    return view('checkout.success');
    })->name('success.orders');

    });

Route::middleware(['auth', 'admin'])->group(function() {
Route::get('/crete/blog', [blogController::class, 'create'])->name('blog.create');
Route::post('/create/blog', [blogController::class, 'store'])->name('blog.store');
Route::get('/blog/edit/{id}', [blogController::class, 'edit'])->name('blog.edit');
Route::get('/blog/destroy/{id}', [blogController::class, 'destroy'])->name('blog.destroy');
Route::get('/blog/liste', [blogController::class, 'liste'])->name('blog.liste');
Route::patch('/blog/update/{id}', [blogController::class, 'update'])->name('blog.update');
Route::get('/blog/detail/{id}', [HomeController::class, 'detail_articles'])->name('article.detail');
Route::get('categorie/appscontect', [CategortAppcomponent::class])->name('category.apps');
Route::post('/create/users', [RegisteredController::class, 'store'])->name('users.store');
Route::get('/users/edit/{id}', [RegisteredController::class, 'edit'])->name('users.edit');
Route::get('/users/destroy/{id}', [RegisteredController::class, 'destroy'])->name('users.destroy');
Route::get('/users', [RegisteredController::class, 'create'])->name('users.create');
Route::get('/users/liste', [RegisteredController::class, 'liste'])->name('users.liste');
Route::patch('/users/update/{id}', [RegisteredController::class, 'update'])->name('users.update');
 Route::get('/categoeries/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/create/category', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::get('/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
Route::get('/category/liste', [CategoryController::class, 'liste'])->name('category.liste');
Route::patch('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::get('/dashboard/create/product', [ProductController::class, 'index'])->name('create.newproduct');
Route::get('/dashboard/product/liste', [ProductController::class, 'create'])->name('product.liste');
Route::get('/dashboard/product/detail/{id}', [ProductController::class, 'show'])->name('product.dashboard.detail');
Route::get('/dashboard/product/remove/{id}', [ProductController::class, 'destroy'])->name('product.dashboard.remove');
Route::get('/dashboard/product/edit/{id}', [ProductController::class, 'edit'])->name('product.dashboard.edit');
 Route::post('/dashboard/product/create', [ProductController::class, 'store'])->name('create_product');
 Route::patch('/dashboard/product/update/{id}', [ProductController::class, 'update'])->name('update.product');
});



