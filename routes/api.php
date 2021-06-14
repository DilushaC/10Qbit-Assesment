<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\busController;
use App\Http\Controllers\routeController;
use App\Http\Controllers\busRouteController;
use App\Http\Controllers\busSeatsController;
use App\Http\Controllers\busSchedulesController;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/****************Bus Management Routes*****************/
Route::get("data",[busController::class,'index']);
Route::post("add",[busController::class,'store']);
Route::put("update",[busController::class,'update']);
Route::delete("delete/{id}",[busController::class,'delete']);


/**************Route Management Routes****************/
Route::get("route/data",[routeController::class,'index']);
Route::post("route/add",[routeController::class,'store']);
Route::put("route/update",[routeController::class,'update']);
Route::delete("route/delete/{id}",[routeController::class,'delete']);


/*************Bus Routes management routes*************/
Route::get("busroutes/data",[routeController::class,'index']);
Route::post("busroutes/add",[routeController::class,'store']);
Route::put("busroutes/update",[routeController::class,'update']);
Route::delete("busroutes/delete",[routeController::class,'delete']);

/**************Bus Seats Management routes**************/
Route::get("busseats/data",[busSeatsController::class,'index']);
Route::post("busseats/add",[busSeatsController::class,'store']);
Route::put("busseats/update",[busSeatsController::class,'update']);
Route::delete("busseats/delete/{id}",[busSeatsController::class,'delete']);

/**************Bus Schedules Management routes**************/
Route::get("busschedules/data",[busSchedulesController::class,'index']);
Route::post("busschedules/add",[busSchedulesController::class,'store']);
Route::put("busschedules/update",[busSchedulesController::class,'update']);
Route::delete("busschedules/delete/{id}",[busSchedulesController::class,'delete']);

/**************Bus Schedules Booking Management routes**************/
Route::get("busbookings/data",[busBookingsController::class,'index']);
Route::post("busbookings/add",[busBookingsController::class,'store']);
Route::put("busbookings/update",[busBookingsController::class,'update']);
Route::delete("busbookings/delete/{id}",[busBookingsController::class,'delete']);

/**************Super Admin Management routes**************/
Route::get("admin/data",[superAdminController::class,'index']);
Route::post("admin/add",[superAdminController::class,'store']);
Route::put("admin/update",[superAdminController::class,'update']);
Route::delete("admin/delete/{id}",[superAdminController::class,'delete']);

