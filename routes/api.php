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

Route::apiResource('city', 'CityController');

Route::apiResource('delivery-times', 'DeliveryTimeController');

//Route::apiResource('city/{city}/delivery-dates-times', 'DeliveryDatesController');

Route::post('city/{city}/delivery-times/{deliveryTimes}', 'DeliveryDatesController@attacheCityToDeliveryTime');
Route::get('city/{city}/delivery-dates-times/{numberOfDays}', 'DeliveryDatesController@getTheNumberOfDays');
