<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LectureController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/schedule', 'LectureController@schedule');

// Route::get('/schedule/fetchajax', 'LectureController@fetchAjax');

Route::get('/podcast', function () {
    return view('podcast');
});
