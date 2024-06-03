<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Giaicontroller;
use App\Http\Controllers\Foodcontroller;
use App\Models\T_food;

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
    
Route::resource('t_foods',FoodController::class);
Route::post('t_foods/search',[FoodController::class,'postSearch'])->name('postSearch');
   