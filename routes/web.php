<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Frontendcontroller;
use App\Http\Controllers\Admin\Admincontroller;
use App\Http\Controllers\Admin\CatagoryController;
use App\Http\Controllers\Admin\SubcatagoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Frontend\VendorController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\SizeController;

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
//Frontend controller start
Route::get('/',[Frontendcontroller::class,'index']);
Route::get('/user/login',[Frontendcontroller::class,'userLogin']);
Route::get('/user/registration',[Frontendcontroller::class,'userRegister']);
//Frontend controller end

//Vendor controller start
Route::get('/vendor/registar',[VendorController::class,'vendorRegistar']);
Route::post('/vendor/registration',[VendorController::class,'vendorRegistration']);
Route::post('/vendor/login',[VendorController::class,'vendorLogin']);
Route::get('/vendor/dashboard',[VendorController::class,'vendorDashboard']);
Route::get('/vendor/manage',[VendorController::class,'vendorManage']);
Route::get('/vendor/delete/{id}',[VendorController::class,'vendorDelete']);
Route::get('/vendor/edit/{id}',[VendorController::class,'vendorEdit']);
Route::get('/vendor/pending/{id}',[VendorController::class,'vendorPending']);
Route::get('/vendor/approve/{id}',[VendorController::class,'vendorApproved']);
Route::get('/vendor/logout',[VendorController::class,'vendorLogout']);
//VENDOR CONTROLLER END

//VENDOR PRODUCT CONTROLLER START
Route::get('/vendor/product/create',[VendorController::class,'vendorProductCreateForm']);
Route::post('/vendor/product/store',[VendorController::class,'vendorProductStore']);
Route::get('/vendor/product/delete/{id}',[VendorController::class,'vendorProductDelete']);
Route::get('/vendor/product/edit/{id}',[VendorController::class,'vendorProductEdit']);
Route::get('/vendor/product/manage',[VendorController::class,'vendorProductManage']);
Route::get('/vendor/product/approved/{id}',[VendorController::class,'vendorProductApproved']);
Route::get('/vendor/product/pending/{id}',[VendorController::class,'vendorProductPending']);
Route::get('/vendor/product/drop/{id}',[VendorController::class,'vendorProductDrop']);

//VENDOR PRODUCT CONTROLLER START

//admin controller start
Route::get('/admin/login',[Admincontroller::class,'adminloginfrom']);
Route::post('/admin/login',[Admincontroller::class,'adminlogin']);
Route::get('/admin/dashboard',[Admincontroller::class,'admindashboard']);
Route::get('/admin/logout',[Admincontroller::class,'adminLogout']);
//Frontend controller end

//catagory controller start
Route::get('/catagory/login',[CatagoryController::class,'catagorycreate']);
Route::get('/catagory/manage',[CatagoryController::class, 'catagoryManage']);
Route::post('/catagory/store',[CatagoryController::class,'catagorystore']);
Route::get('/catagory/delete/{id}',[CatagoryController::class,'catagoryDelete']);
Route::get('/catagory/edit/{id}',[CatagoryController::class,'catagoryEdit']);
Route::post('/catagory/update/{id}',[CatagoryController::class,'catagoryUpdate']);
//catagory controller end

//subcatagory controller start
Route::get('/subcatagory/create',[SubcatagoryController::class,'subcatagoryCreate']);
Route::get('/subcatagory/manage',[SubcatagoryController::class,'subcatagoryManage']);
Route::post('/subcatagory/store',[SubcatagoryController::class,'subcatagoryStore']);
Route::get('/subcatagory/delete/{id}',[SubcatagoryController::class,'subcatagoryDelete']);
Route::get('/subcatagory/edit/{id}',[SubcatagoryController::class,'subcatagoryEdit']);
Route::post('/subcatagory/update/{id}',[SubcatagoryController::class,'subcatagoryUpdate']);
//subcatagory controller end

//BrandController start
Route::get('/brand/create',[BrandController::class,'brandCreate']);
Route::post('/brand/store',[BrandController::class,'brandStore']);
Route::get('/brand/manage',[BrandController::class,'brandManage']);
Route::get('/brand/delete/{id}',[BrandController::class,'brandDelete']);
Route::get('/brand/edit/{id}',[BrandController::class,'brandEdit']);
Route::post('/brand/update/{id}',[BrandController::class,'brandUpdate']);
//BrandController end

//Color Controller start
Route::get('/color/create',[ColorController::class,'colorCreate']);
Route::post('/color/store',[ColorController::class,'colorStore']);
Route::get('/color/manage',[ColorController::class,'colorManage']);
Route::get('/color/delete/{id}',[ColorController::class,'colorDelete']);
Route::get('/color/edit/{id}',[ColorController::class,'colorEdit']);
Route::post('/color/update/{id}',[ColorController::class,'colorUpdate']);
//Color Controller end

//Size Controller Strart
Route::get('/size/create',[SizeController::class,'sizeCreate']);
Route::post('/size/store',[SizeController::class,'sizeStore']);
Route::get('/size/manage',[SizeController::class,'sizeManage']);
Route::get('/size/delete/{id}',[SizeController::class,'sizeDelete']);
Route::get('/size/edit/{id}',[SizeController::class,'sizeEdit']);
Route::post('/size/update/{id}',[SizeController::class,'sizeUpdate']);

//Size Controller end
