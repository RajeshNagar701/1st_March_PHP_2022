<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\basic_controller;
use App\Http\Controllers\Invokable_controller;


use App\Http\Controllers\index_controller;
use App\Http\Controllers\about_controller;
use App\Http\Controllers\service_controller;
use App\Http\Controllers\team_controller;
use App\Http\Controllers\client_controller;
use App\Http\Controllers\contact_controller;

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



//Route::view('/','Website.index');

/*
Route::get('/', function () {
    return view('Website.index');
});
*/

//Route::get('/',[basic_controller::class,'index']); // basic controller
//Route::get('/',Invokable_controller::class);   // --invokable controller



Route::get('/',[index_controller::class,'index']);
Route::get('/index',[index_controller::class,'index']);
Route::get('/about',[about_controller::class,'index']);
Route::get('/service',[service_controller::class,'index']);
Route::get('/team',[team_controller::class,'index']);
Route::get('/client',[client_controller::class,'index']);
Route::get('/contact',[contact_controller::class,'index']);

//================================================================




Route::get('/admin', function () {
    return view('Admin/index');
});

Route::get('/dashboard', function () {
    return view('Admin.dashboard');
});

Route::get('/add-employee', function () {
    return view('Admin.add-employee');
});

Route::get('/manage-employee', function () {
    return view('Admin.manage-employee');
});
