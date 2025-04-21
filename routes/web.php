<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;


Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.home');
    })->name('dashboard');
});



Route::get('/property',[HomeController::class,'property']);

Route::get('/agent',[HomeController::class,'agent']);

Route::get('/about',[HomeController::class,'about']);

Route::get('/blog',[HomeController::class,'blog']);

Route::get('/contact',[HomeController::class,'contact']);


Route::get('/add_property_view',[AdminController::class,'addview']);

Route::post('/upload_property',[AdminController::class,'upload']);

Route::get('/add_agent_view',[AdminController::class,'loadview']);

Route::post('/load_agent',[AdminController::class,'load']);

Route::get('/add_blog_view',[AdminController::class,'blogview']);

Route::post('/post_blog',[AdminController::class,'post']);

Route::post('/message',[HomeController::class,'message']);

Route::get('/add_testmony_view',[AdminController::class,'testmonyview']);

Route::post('/add_testmony',[AdminController::class,'add']);

Route::get('/all_messages_view',[AdminController::class,'all_messages']);

Route::get('/emailview/{id}',[AdminController::class,'emailview']);

Route::post('/sendemail/{id}',[AdminController::class,'sendemail']);

Route::get('/deletemessage/{id}',[AdminController::class,'deletemessage']);

Route::get('/showproperty',[AdminController::class,'showproperty']);

Route::get('/deleteproperty/{id}',[AdminController::class,'deleteproperty']);

Route::get('/showagent',[AdminController::class,'showagent']);

Route::get('/deleteagent/{id}',[AdminController::class,'deleteagent']);

Route::get('/showblog',[AdminController::class,'showblog']);

Route::get('/deleteblog/{id}',[AdminController::class,'deleteblog']);

Route::get('/showtestmony',[AdminController::class,'showtestmony']);

Route::get('/deletetestmony/{id}',[AdminController::class,'deletetestmony']);