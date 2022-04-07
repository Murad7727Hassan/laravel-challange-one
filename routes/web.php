<?php

use App\Http\Controllers\Login;
use App\Http\Controllers\Profile;
use App\Http\Controllers\Proflio;
use App\Http\Controllers\NewAcount;
use App\Http\Controllers\About;
use App\Http\Controllers\Company;
use App\Http\Controllers\Connect;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Emplloys;


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
Route::get('/',function(){
  return  view("index");
});
Route::get('/login',[Login::class,'showLogin']);
Route::get('/employs',[Emplloys::class,'showemplloys']);
Route::get('/profile',[Profile::class,'showprofile']);
Route::get('/proflio',[Proflio::class,'showproflio']);
Route::get('/about',[About::class,'showabout']);
Route::get('/company',[Company::class,'showcompany']);
Route::get('/connect',[Connect::class,'showconnect']);
Route::get('/details',[Login::class,'showdetails']);
Route::get('/moreview',[Login::class,'showmoreview']);
Route::get('/newacount',[NewAcount::class,'shownewacount']);
Route::get('/viewjob',[Login::class,'showviewjob']);





