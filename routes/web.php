<?php

use App\Http\Controllers\AdminProducts;
use App\Http\Controllers\Settings;
use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\Analytics;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\authentications\RegisterBasic;
use App\Http\Controllers\authentications\ForgotPasswordBasic;
use App\Http\Controllers\cards\CardBasic;
use App\Http\Controllers\Category;
use App\Http\Controllers\Charts;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Invoice;
use App\Http\Controllers\Orders;
use App\Http\Controllers\tables\Basic as TablesBasic;
use App\Http\Controllers\CustomerManagement;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Informativepages;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Home;
use App\Http\Controllers\Google;


Route::get('/', [Home::class, 'index'])->name('home');
Route::get('/profile', [Home::class, 'profile'])->name('profile');
Route::get('/checkout', [Home::class, 'checkout'])->name('checkout');
Route::get('/privacy-policy', [Home::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms-and-conditions', [Home::class, 'termsAndConditions'])->name('terms-and-conditions');
Route::get('/cancellation-and-refund-policy', [Home::class, 'refundPolicy'])->name('refund-policy');
Route::get('/auth/google',[Google::class,'index'])->name('google-login');
Route::get('/auth/google/callback',[Google::class,'callback'])->name('google-login');


Route::get('/admin-manage', [LoginBasic::class, 'index'])->name('admin-login');
// Route::get('/register', [RegisterBasic::class, 'index'])->name('admin-register');
Route::get('/forgot-password', [ForgotPasswordBasic::class, 'index'])->name('admin-forgot-password');

Route::post('/adminLogin', [Analytics::class, 'index'])->name('admin.login');

Route::group(['prefix' => 'admin'], function () {

  Route::post('/adminLogout', [Analytics::class, 'logout'])->name('admin.logout');

  Route::group(['middleware' => 'checkAdminUser'], function () {

    Route::get('/dashboard', [Analytics::class, 'AuthLogin'])->name('admin.authlogin');
    Route::get('/home', [HomeController::class, 'home'])->name('manage-home');
    Route::get('/slider', [HomeController::class, 'index'])->name('manage-slider');
    Route::get('/collection', [HomeController::class, 'collection'])->name('manage-collection');
    Route::post('/save-about-content', [HomeController::class, 'saveAbout'])->name('save-about');
    Route::post('/save-header-content', [HomeController::class, 'saveHeader'])->name('save-header');
    Route::post('/save-contact-content', [HomeController::class, 'saveContact'])->name('save-contact');
    Route::post('/slider/upload', [HomeController::class, 'uploadSlider'])->name('upload.sliders');
    Route::post('/collection/upload', [HomeController::class, 'uploadCollection'])->name('upload.collection');
    Route::post('/policies/save', [Informativepages::class, 'savePrivacy'])->name('policies.save');
    Route::post('/terms/save', [Informativepages::class, 'saveTerms'])->name('policies2.save');
    Route::post('/refund/save', [Informativepages::class, 'saveRefund'])->name('policies3.save');
    Route::post('/change-password', [HomeController::class, 'changePassword'])->name('change.password');
    Route::post('/change-profile', [HomeController::class, 'changeProfile'])->name('change.profile');
    Route::post('/product-save', [ProductController::class, 'store'])->name('product.store');
    Route::post('/products/{product}/status', [AdminProducts::class, 'updateStatus'])->name('products.status');
    Route::put('/admin/products/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::resource('/products', AdminProducts::class);
    Route::resource('/category', Category::class);
    Route::resource('/orders', Orders::class);
    Route::get('/orders-view', [Orders::class, 'view'])->name('admin-orders-view');
    Route::resource('invoice', Invoice::class);
    Route::get('/invoice-view', [Invoice::class, 'view'])->name('admin-invoice-view');
    // Route::get('/invoice-edit', [Invoice::class, 'edit'])->name('admin-invoice-edit');
    Route::get('/invoice-print', [Invoice::class, 'print'])->name('admin-invoice-print');
    Route::resource('/users', Users::class);
    Route::resource('/settings', Settings::class);
    Route::resource('/charts', Charts::class);
    Route::get('customermanagement', [CustomerManagement::class, 'index'])->name('customermanagement');
    Route::get('privacypolicy', [Informativepages::class, 'index'])->name('privacypolicy');
    Route::get('termsandconditions', [Informativepages::class, 'termsandconditions'])->name('termsandconditions');
    Route::get('cancellationrefundpolicy', [Informativepages::class, 'cancellationrefundpolicy'])->name('cancellationrefundpolicy');
  });
});