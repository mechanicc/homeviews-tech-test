<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

Route::get('listings', 'App\Http\Controllers\ListingController@index');
Route::get('listings/{id}', 'App\Http\Controllers\ListingController@show');
Route::post('listings', 'App\Http\Controllers\ListingController@store');
Route::put('listings/{id}', 'App\Http\Controllers\ListingController@update');
Route::delete('listings/{id}', 'App\Http\Controllers\ListingController@delete');
