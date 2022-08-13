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
use App\Http\Controllers\customer_controller;


use App\Http\Controllers\admin_controller;
use App\Http\Controllers\dashboard_controller;

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
Route::post('/contact',[contact_controller::class,'store']);


Route::get('/signup',[customer_controller::class,'index']);
Route::post('/signup',[customer_controller::class,'store']);

Route::get('/login',[customer_controller::class,'login']);
Route::post('/loginuser',[customer_controller::class,'loginuser']);

Route::get('/profile',[customer_controller::class,'profile']);
Route::get('/profile/{id}',[customer_controller::class,'edit']);
Route::post('/profile/{id}',[customer_controller::class,'update']);
//================================================================


Route::get('/admin',[admin_controller::class,'index']);
Route::get('/dashboard',[dashboard_controller::class,'index']);
Route::get('/manage_contact',[contact_controller::class,'allshow']);
Route::get('/manage_contact/{id}',[contact_controller::class,'destroy']);

