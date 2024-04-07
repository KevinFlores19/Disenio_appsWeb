<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdersController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'orders.index');
Route::resource('/orders',OrdersController::class);

Route::get('/Delivery', function () {
    return view('delivery');
});

Route::get('/RegisterUser', function () {
    return view('registerUser');
});

Route::get('/OrderRegistration', function () {
    return view('orderRegistration');
});

Route::get('/OrderManagement', function () {
    return view('orderManagement');
});

Route::get('/RouteManagement', function () {
    return view('routeManagement');
});

Route::get('/DeletedOrders', function () {
    return view('deletedOrders');
});
