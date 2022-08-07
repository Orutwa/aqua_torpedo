<?php

use App\Http\Controllers\dataController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\viewsController;
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
    return view('index');
});
Route::get('/logout', function () {
    session()->forget('user');
    return view('index');
});
Route::get('/reg_user', function () {
    return view('users');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/landing', function () {
    return view('landing');
});

//user control
Route::post('/register_user', [mainController::class, 'registration']);
Route::post('/login', [mainController::class, 'login']);

//Read data control
Route::get('/yard',[viewsController::class, 'vehicle'] );
Route::get('/dashboard',[viewsController::class, 'dashboard'] )->middleware('sessionCheck');

//create, delete and update data control
Route::post('/reg_vehicle',[dataController::class, 'reg_vehicle'] );
Route::post('/addBrand',[dataController::class, 'brand'] );
Route::post('/addType',[dataController::class, 'type'] );
Route::post('/addModel',[dataController::class, 'model'] );
Route::post('/contact',[dataController::class, 'message'] );
Route::get('/read/{id}',[dataController::class, 'read']);
Route::get('/unread/{id}',[dataController::class, 'unread']);