<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\defaultController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

//default web
Route::get('lobby',[defaultController::class,'lobby']);
Route::get('default/product-list', [defaultController::class, 'productList']);
Route::get('default/single-product/{id}', [defaultController::class, 'singleProduct']);

Route::group(['middleware' => 'guest'], function () {
    Route::match(['get', 'post'], 'log', ['as' => 'login', 'uses' => 'App\Http\Controllers\loginController@login']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('product-list', [ProductController::class, 'index']);
    Route::get('/', function () { return view('/');});
    
});

Route::get('register',[loginController::class,'register']);
Route::post('account-save',[loginController::class,'save']);



Route::prefix('user/index')->group(function () {
    // User Routes
    Route::get('{email}/{password1}', [UserController::class, 'lobby']);
    Route::get('profile/{email}/{password1}', [UserController::class, 'profile']);
    Route::get('edit-account/{email}/{password1}', [UserController::class, 'editAccount']);
    Route::get('product-list/{email}/{password1}', [UserController::class, 'productList']);
    Route::get('product-list/{email}/{password1}/{id}', [UserController::class, 'productFilter']);
    Route::get('product-Search/{email}/{password1}/{search}', [UserController::class, 'productSearch']);

    Route::get('single-product/{email}/{password1}/{id}', [UserController::class, 'singleProduct']);
    Route::post('account-save', [UserController::class, 'save']);

    // Payment Routes
    Route::get('cart/{email}/{password1}', [CartController::class, 'cartList']);
    Route::get('cart-delete/{id}/{catID}', [CartController::class, 'cartDelete']);
    Route::get('payment/{email}/{password1}', [CartController::class, 'payment']);
    Route::get('order/{email}/{password1}', [CartController::class, 'order']);
    Route::post('cart-save/{email}/{password1}', [CartController::class, 'add']);
    Route::post('purchase/{email}/{password1}', [CartController::class, 'purchase']);
    Route::post('payment-save/{email}/{password1}', [CartController::class, 'paymentSave']);
    Route::get('order-delete/{email}/{password1}/{id}', [CartController::class, 'deleteOrder']);

});


// Admin Routes
Route::prefix('admin')->group(function () {
    Route::post('order-status-update', [AdminController::class, 'orderStatusUpdate']); 
    Route::get('customer-order/{email}/{password1}', [AdminController::class, 'order']); 
    Route::get('index/{email}/{password1}', [AdminController::class, 'dashboard']);
    Route::get('product-list/{email}/{password1}', [AdminController::class, 'productList']);
    Route::get('product-add/{email}/{password1}', [AdminController::class, 'add']);
    Route::get('product-edit/{email}/{password1}/{id}', [AdminController::class, 'edit']);
    Route::get('product-delete/{id}', [AdminController::class, 'delete']);
    Route::get('index/profile/{email}/{password1}', [AdminController::class, 'profile']);
    Route::get('customer-list/{email}/{password1}', [AdminController::class, 'customerlist']);
    Route::get('customer-edit/{email}/{password1}/{id}', [AdminController::class, 'customerEdit']);
    Route::get('customer-delete/{id}', [AdminController::class, 'customerDelete']);
    Route::post('product-save', [AdminController::class, 'save']);
    Route::post('product-update', [AdminController::class, 'update']);
    Route::post('customer-update', [AdminController::class, 'customerUpdate']);


    // Category Routes
    Route::get('category-list/{email}/{password1}', [CategoryController::class, 'categoryList']);
    Route::get('category-add/{email}/{password1}', [CategoryController::class, 'Add']);
    Route::get('category-edit/{email}/{password1}/{id}', [CategoryController::class, 'edit']);
    Route::get('category-delete/{id}', [CategoryController::class, 'delete']);
    Route::post('category-update', [CategoryController::class, 'update']);
    Route::post('category-save', [CategoryController::class, 'save']);
});