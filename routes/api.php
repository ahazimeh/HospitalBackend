<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/profiles', 'ProfileController@index');
Route::get('/profile/{id}', 'ProfileController@show');

Route::get('/requests', 'RequestController@index');
Route::get('/request/{id}', 'RequestController@show');
Route::post('/request', 'RequestController@store');

Route::get('/blood_types', 'BloodTypeController@index');

Route::get('/user', 'UserController@show');

Route::get('/donation/{reqId}', 'DonationsController@show');
