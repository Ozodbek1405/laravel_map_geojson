<?php

use App\Http\Controllers\RegionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[RegionController::class,'map_view']);
Route::get('/create-view',[RegionController::class,'create_view']);
Route::post('/create-region',[RegionController::class,'create_region'])->name('create.region');
Route::post('/create-district',[RegionController::class,'create_district'])->name('create.district');
