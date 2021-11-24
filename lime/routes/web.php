<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\NoticeController;

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
Route::get("/login", [LoginController::class, "index"])->name("login.index");
Route::post("/login/check", [LoginController::class, "check"]);
Route::post("/login/entrycheck", [LoginController::class, "entrycheck"]);
Route::get("/menu", [MenuController::class, "index"])->name("menu.index");
Route::post("/menu/bgimgupload", [MenuController::class, "bgimgupload"])->name("menu.bgimgupload");
Route::post("/menu/topimgupload", [MenuController::class, "topimgupload"])->name("menu.topimgupload");
Route::post("/menu/addcategory", [MenuController::class, "addcategory"])->name("menu.addcategory");
Route::post("/menu/getmenuitem", [MenuController::class, "getmenuitem"]);
Route::post("/menu/menuentry", [MenuController::class, "menuentry"]);
Route::post("/menu/menudelete", [MenuController::class, "menudelete"]);
Route::post("/menu/templateupdate", [MenuController::class, "templateupdate"]);
Route::post("/menu/templateswitch", [MenuController::class, "templateswitch"]);
Route::post("/menu/templatescopy", [MenuController::class, "templatescopy"]);
Route::get("/edit", [EditController::class, "index"])->name("edit.index");
Route::get("/notice", [NoticeController::class, "index"])->name("notice.index");

