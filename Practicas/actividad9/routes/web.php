<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Conferencescontroller;
use App\Http\Controllers\Divisionscontroller;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\TeamsController;

Route::view('/', 'conferences.index');
Route::resource('/conferences',Conferencescontroller::class);

Route::view('/', 'divisions.index');
Route::resource('/divisions',DivisionsController::class);

Route::view('/', 'cities.index');
Route::resource('/cities',CitiesController::class);

Route::view('/', 'teams.index');
Route::resource('/teams',TeamsController::class);
