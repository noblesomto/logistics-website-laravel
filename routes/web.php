<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'index']);
Route::get('/about-us', [PageController::class, 'about']);
Route::get('/air-freight', [PageController::class, 'air_freight']);
Route::get('/sea-freight', [PageController::class, 'sea_freight']);
Route::get('/land-freight', [PageController::class, 'land_freight']);
Route::get('/warehousing', [PageController::class, 'warehousing']);
Route::get('/services', [PageController::class, 'services']);
Route::any('/quote', [PageController::class, 'quote']);
Route::any('/career', [PageController::class, 'career']);
Route::any('/contact-us', [PageController::class, 'contact']);
Route::get('/track-order', [PageController::class, 'track_order']);
Route::any('/get-order', [PageController::class, 'get_order']);
Route::any('/order-details/{id}', [PageController::class, 'order_details']);
Route::any('/receipt/{id}', [PageController::class, 'receipt']);
Route::any('/receipt2/{id}', [PageController::class, 'receipt2']);
Route::any('/admin-login', [PageController::class, 'adminlogin']);


//Admin Section
Route::get('/admin/index', [AdminController::class, 'index'])->middleware('adminsession');
Route::any('/admin/new-order', [AdminController::class, 'new_order'])->middleware('adminsession');
Route::any('/admin/sender/{id}', [AdminController::class, 'sender'])->middleware('adminsession');
Route::any('/admin/receiver/{id}', [AdminController::class, 'receiver'])->middleware('adminsession');
Route::get('/admin/all-orders', [AdminController::class, 'orders'])->middleware('adminsession');
Route::any('/admin/order-status/{id}/{status}', [AdminController::class, 'order_status'])->middleware('adminsession');
Route::any('/admin/edit-order/{id}', [AdminController::class, 'edit_order'])->middleware('adminsession');
Route::any('/admin/view-order/{id}', [AdminController::class, 'view_order'])->middleware('adminsession');
Route::any('/admin/delete-order/{id}', [AdminController::class, 'delete_order'])->middleware('adminsession');
Route::any('/admin/new-location', [AdminController::class, 'new_location'])->middleware('adminsession');
Route::any('/admin/delete-location/{order_id}/{id}', [AdminController::class, 'delete_location'])->middleware('adminsession');
Route::get('/admin/logout', [AdminController::class, 'logout'])->middleware('adminsession');
