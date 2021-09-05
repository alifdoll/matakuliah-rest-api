<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Lecture;
use App\Group;
use App\Schedule;

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


Route::get('/lectures', function () {
    return Group::findOrFail('2508')->lecture;
});

// Route::get('/products', 'ProductController@index');
// Route::get('/categories', 'CategoryController@index');

// Route::post('/products', 'ProductController@store');
// Route::post('/categories', 'CategoryController@store');



// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
