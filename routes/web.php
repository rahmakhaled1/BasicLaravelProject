<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::post('/upload_post',[HomeController::class,'upload'])->name('upload.post');
Route::get('/view_post',[HomeController::class,'view_post']);
Route::get('/delete_post/{id}',[HomeController::class,'delete_post']);
Route::get('/update_post/{id}',[HomeController::class,'update_post']);
Route::post('/confirm_update/{id}',[HomeController::class,'confirm_update']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('create.post');
});
