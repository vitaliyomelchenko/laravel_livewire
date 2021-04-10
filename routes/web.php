<?php

use App\Http\Controllers\CategoryController;
use App\Http\Livewire\AboutUsComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ContactUsComponent;
use App\Http\Livewire\DetailComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Test;

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

Route::get('/', HomeComponent::class);
Route::get('/shop', ShopComponent::class);
Route::get('/cart', CartComponent::class);
Route::get('/checkout', CheckoutComponent::class);
Route::get('/about-us', AboutUsComponent::class);
Route::get('/contact-us', ContactUsComponent::class);
//Admin
Route::get('/admin/dashboard', AdminDashboardComponent::class)
    ->middleware(['auth:sanctum', 'verified', 'authadmin'])
    ->name('admin.dashboard');
//User
Route::get('/user/dashboard', UserDashboardComponent::class)
    ->middleware(['auth:sanctum', 'verified'])
    ->name('user.dashboard');

Route::get('/products/{slug}', DetailComponent::class)->name('product.detail');