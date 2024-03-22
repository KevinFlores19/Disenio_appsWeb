<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Conferencescontroller;
use App\Http\Controllers\DivisionsController;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\TeamsController;

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




Route::view('/', 'conferences.index');
Route::resource('/conferences',Conferencescontroller::class);

Route::view('/', 'divisions.index');
Route::resource('/divisions',DivisionsController::class);

Route::view('/', 'cities.index');
Route::resource('/cities',CitiesController::class);

Route::view('/', 'teams.index');
Route::resource('/teams',TeamsController::class);
