<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controller_hospital;

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

Route::get('/',[controller_hospital::class,'index']);
Route::get('/add_hospital',[controller_hospital::class,'create']);
Route::post('/getStates',[controller_hospital::class,'getStates']);
Route::post('/getCity',[controller_hospital::class,'getCity']);

Route::post('/add_hospital',[controller_hospital::class,'store']);



