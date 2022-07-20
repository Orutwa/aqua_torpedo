<?php
use App\Http\Controllers\mainController;
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
Route::post('/register_user', [mainController::class, 'registration']);
Route::post('/login', [mainController::class, 'login']);
Route::get('/yard',[mainController::class, 'vehicle'] );
Route::get('/dashboard',[mainController::class, 'dashboard'] );
Route::post('/reg_vehicle',[mainController::class, 'reg_vehicle'] );
Route::post('/addBrand',[mainController::class, 'brand'] );
Route::post('/addType',[mainController::class, 'type'] );
Route::post('/addModel',[mainController::class, 'model'] );