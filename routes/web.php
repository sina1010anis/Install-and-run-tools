<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
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

Route::get('/', function (){
    return '<a href="/register">Register</a>';
    //return \Inertia\Inertia::render('editor') ;
});
Route::get('/test', function (){
    return \Inertia\Inertia::render('Textedit') ;
});
Route::get('/test_2', [IndexController::class , 'test_2']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
