<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\DeviceController;
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
    return view('welcome');
});

Route::resource('/devices', DeviceController::class);

// Route::get('/devices', [DevicesController::class, 'index']);

// Route::get('/devices/new',[DevicesController::class, 'create']);

// Route::post('/devices/store',[DevicesController::class, 'store'] );