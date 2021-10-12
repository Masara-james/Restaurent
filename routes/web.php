<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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
    //  return view('welcome');
   // });

 
 Route::get("/",[HomeController::class,"index"]);
Route::get("/users",[AdminController::class,"users"]);
Route::get("/deleteusers/{id}",[AdminController::class,"deleteusers"]);
Route::get("/foodmenu",[AdminController::class,"foodmenu"]);
Route::post("/uploadfood",[AdminController::class,"upload"]);
Route::get("/deletefood/{id}",[AdminController::class,"deletefood"]);
Route::get("/updatefood/{id}",[AdminController::class,"updatefood"]);
Route::post("/upload/{id}",[AdminController::class,"update"]);
Route::post("/reservation",[AdminController::class,"reservation"]);
Route::get("/viewchef",[AdminController::class,"viewchef"]);
Route::post("/uploadchef",[AdminController::class,"uploadchef"]);
Route::get("/updatechef/{id}",[AdminController::class,"updatechef"]);






 Route::get("/redirects",[HomeController::class,"redirects"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

