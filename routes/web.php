<?php

use App\Http\Controllers\MassController;
use App\Http\Controllers\ParishionerController;
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
    return [2,2,2,2];
});


Route::resource('/masses', MassController::class);
Route::get('/masses/{mass}/parishioners',
    [MassController::class ,'massUsers']
);

Route::resource('/parishioners', ParishionerController::class);
Route::get('/parishioners/{user}/masses',
    [ParishionerController::class ,'getMasses']
);
