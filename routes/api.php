<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// list bookings
Route::get('show','BookingController@booking');
//add bookings
Route::post('add','BookingController@addbooking');
//delete booking
Route::delete('delete/{booking_reference}','BookingController@deletebooking');
//update booking
Route::put('update/{booking_reference}','BookingController@updatebooking');