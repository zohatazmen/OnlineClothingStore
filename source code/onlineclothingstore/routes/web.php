<?php

use App\Http\Controllers\backend\AdminHomeController;
use App\Http\Controllers\backend\AdminLoginController;
use App\Http\Controllers\backend\AdminOrderController;
use App\Http\Controllers\backend\AdminProductsController;
use App\Http\Controllers\backend\AdminPromotionController;
use App\Http\Controllers\backend\AdminReviewController;
use App\Http\Controllers\frontend\AboutUsController;
use App\Http\Controllers\frontend\AccountController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\ChangePasswordController;
use App\Http\Controllers\frontend\ContactUsController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\LoginController;
use App\Http\Controllers\frontend\MyOrdersController;
use App\Http\Controllers\frontend\OrderController;
use App\Http\Controllers\frontend\OrderDetailController;
use App\Http\Controllers\frontend\PasswordResetController;
use App\Http\Controllers\frontend\RegisterController;
use App\Http\Controllers\frontend\ReviewController;
use App\Http\Controllers\frontend\ShopController;
use App\Http\Controllers\frontend\WishlistController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/contact-us', [ContactUsController::class, 'index']);
Route::post('/contact-us', [ContactUsController::class, 'submitMessage']);
Route::get('/my-orders', [MyOrdersController::class, 'index'])->name('my-orders');
Route::get('/order-detail', [OrderDetailController::class, 'index'])->name('order-detail');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');

// Add to Cart
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');

// View Cart
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add.to.cart');

Route::post('/cart/update', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');

// Checkout
Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
Route::post('/checkout', [OrderController::class, 'placeOrder'])->name('checkout.placeOrder');

Route::get('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::post('/reviews/store', [ReviewController::class, 'store'])->name('reviews.store');
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');
Route::get('/product/{id}/reviews', [ReviewController::class, 'show'])->name('reviews.show');

Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');
Route::get('/change-password', [ChangePasswordController::class, 'index'])->name('password.change');
Route::post('/change-password', [ChangePasswordController::class, 'update'])->name('password.update');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/account', [AccountController::class, 'index'])->name('account');
    Route::get('/account/edit', [AccountController::class, 'edit'])->name('account.edit');
    Route::put('/account/update', [AccountController::class, 'update'])->name('account.update');
});

Route::get('password/forgot', [PasswordResetController::class, 'showForgotForm'])->name('password.forgot');
Route::post('password/forgot', [PasswordResetController::class, 'sendResetLink'])->name('password.email');
Route::get('password/reset/{token}', [PasswordResetController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [PasswordResetController::class, 'reset'])->name('password.update');

Route::get('password/change', [ChangePasswordController::class, 'index'])->name('password.change');
Route::post('password/update', [ChangePasswordController::class, 'update'])->name('password.update');


Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', [AdminLoginController::class, 'index'])->name('admin.login');
    Route::post('/authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');

    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/dashboard', [AdminHomeController::class, 'index'])->name('admin.dashboard');
        Route::get('/products', [AdminProductsController::class, 'index'])->name('products.index');
        Route::get('/product-add', [AdminProductsController::class, 'create']);
        Route::post('/product-add', [AdminProductsController::class, 'store']);
        Route::get('/product-edit/{id}', [AdminProductsController::class, 'edit']);
        Route::put('/product-edit/{id}', [AdminProductsController::class, 'update'])->name('product.update');
        Route::delete('/product-delete/{id}', [AdminProductsController::class, 'destroy']);

        Route::get('/orders', [AdminOrderController::class, 'index'])->name('admin.orders.index');
        Route::get('/orders/create', [AdminOrderController::class, 'create'])->name('admin.orders.create');
        Route::post('/orders', [AdminOrderController::class, 'store'])->name('admin.orders.store');
        Route::get('/orders/{id}/edit', [AdminOrderController::class, 'edit'])->name('admin.orders.edit');
        Route::put('/orders/{id}', [AdminOrderController::class, 'update'])->name('admin.orders.update');
        Route::delete('/orders/{id}', [AdminOrderController::class, 'destroy'])->name('admin.orders.destroy');

        Route::get('/reviews', [AdminReviewController::class, 'index'])->name('admin.reviews.index');
        Route::get('/reviews/create', [AdminReviewController::class, 'create'])->name('admin.reviews.create');
        Route::post('/reviews', [AdminReviewController::class, 'store'])->name('admin.reviews.store');
        Route::get('/reviews/{id}/edit', [AdminReviewController::class, 'edit'])->name('admin.reviews.edit');
        Route::put('/reviews/{id}', [AdminReviewController::class, 'update'])->name('admin.reviews.update');
        Route::delete('/reviews/{id}', [AdminReviewController::class, 'destroy'])->name('admin.reviews.destroy');

        Route::get('/promotions', [AdminPromotionController::class, 'index'])->name('admin.promotions.index');
        Route::get('/promotions/create', [AdminPromotionController::class, 'create'])->name('admin.promotions.create');
        Route::post('/promotions', [AdminPromotionController::class, 'store'])->name('admin.promotions.store');
        Route::get('/promotions/{id}/edit', [AdminPromotionController::class, 'edit'])->name('admin.promotions.edit');
        Route::put('/promotions/{id}', [AdminPromotionController::class, 'update'])->name('admin.promotions.update');
        Route::delete('/promotions/{id}', [AdminPromotionController::class, 'destroy'])->name('admin.promotions.destroy');

        Route::get('/logout', [AdminHomeController::class, 'logout'])->name('admin.logout');
    });

});