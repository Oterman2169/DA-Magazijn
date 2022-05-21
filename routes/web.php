<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Navigation;
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
Route::get('/Register-Products',[Navigation::class,'RegisterContainers'])->name('RegisterContainers');
Route::get('/Products-Overzicht',[Navigation::class,'ProductOverzicht'])->name('ProductOverzicht');