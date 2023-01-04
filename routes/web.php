<?php

use App\Http\Controllers\BussinessLineController;
use Illuminate\Support\Facades\Route;

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
    return view('frontend.home');
    // return view('welcome');
});
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/business-line',[BussinessLineController::class,'index']);
Route::get('/aboutus',[BussinessLineController::class,'aboutus']);


