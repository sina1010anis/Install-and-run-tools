<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ChatController;
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

Route::get('/', [IndexController::class , 'test']);
Route::get('/test', function (){
    return \Inertia\Inertia::render('Textedit') ;
});
Route::get('/test_2', [IndexController::class , 'test_2']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/chat')->middleware('auth')->as('chat')->group(function (){
    Route::get('/' , [ChatController::class , 'index'])->name('.index');
    Route::post('/user' , [ChatController::class , 'userView'])->name('.user.view');
    Route::post('/message' , [ChatController::class , 'messageView'])->name('.message.view');
});
