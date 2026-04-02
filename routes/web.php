<?php

use App\Http\Controllers\FirstController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hi',function(){
    return 'hi';
})->name('hi');
Route::get('/helo', function(){
    return 'heloo isb';
})->name('helo');
Route::get('/home', [HomeController::class, 'show']);
Route::get('/home/sum', [FirstController::class,'sum']);
Route::get('home/multiply/{param1}/{param2?}',[FirstController::class,'multiply']);
Route::get('/about', function(){
  return view('about');
});
Route::get('/store', function(){
  return view('store');
});