<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperheroesController;
use App\Http\Controllers\UniversesController;
use App\Http\Controllers\LogosController;


Route::get('/', function () {
    return view('welcome');
});


Route::resources([
    '/superheroes'   => SuperheroesController::class,
    '/universes'    => UniversesController::class,
    '/logos'        => LogosController::class
]);