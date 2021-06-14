<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\busController;
use App\Http\Controllers\routeController;
use App\Http\Controllers\busRoutesController;
use App\Http\Controllers\busSeatsController;
use App\Http\Controllers\busSchedulesController;


Route::resource('bus', busController::class);
Route::resource('routes', routeController::class);
Route::resource('bus_routes', busRoutesController::class);
Route::resource('bus_seates', busSeatsController::class);
Route::resource('bus_schedules', busSchedulesController::class);
Route::resource('bus_bookings', busBookingsController::class);
Route::resource('super_admin', superAdminController::class);

