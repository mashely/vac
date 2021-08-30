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

// ussd
Route::get('devs/jinsia', 'RoughController@jinsia');
Route::get('devs/umri', 'RoughController@umri');
Route::get('devs/mahali', 'RoughController@mahali');
Route::get('devs/ainazaunyanyasaji', 'RoughController@ainazaunyanyasaji');
Route::get('devs/muhusika', 'RoughController@muhusikawaunyanyasaji');


Route::post('devs/ussd_request', 'RoughController@index');



// So this is what i did, i made a route which receive your request
Route::get('explore', 'Api\Homeplace\MainController@explore');
Route::get('/', 'Api\Search\SearchController@store');



// system
Route::get('ads/visit/{id}', 'MainController@adsManager');
Route::resource('external-resource', 'Api\Search\ExternalResourceController');