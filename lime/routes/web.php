<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TesController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/home", [HomeController::class, "index"])->name("home.index");
Route::post("/new", [HomeController::class, "new"])->name("home.new");
Route::post("/home/check", [HomeController::class, "check"]);

Route::get("/tes", [TesController::class, "index"])->name("tes.index");
Route::post("/tes2", [TesController::class, "tes2"])->name("tes.tes2");
Route::post("/tes/check", [TesController::class, "check"]);