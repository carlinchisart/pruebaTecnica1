<?php

use App\Http\Controllers\Nomina;
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
    return view('welcome');
});

Route::get('nomina',[Nomina::class,'index'])->name('nomina');
Route::get('manifiestos/{camion_id}',[Nomina::class,'manifiestos'])->name('manifiestos');
