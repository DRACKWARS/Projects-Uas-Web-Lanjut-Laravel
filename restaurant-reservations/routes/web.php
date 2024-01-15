<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Foodchef;
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


Route::get("/",[HomeController::class,"index"]);

Route::get("/users",[AdminController::class,"user"]);

Route::get("/foodmenu",[AdminController::class,"foodmenu"]);

Route::get("/viewcheaf",[AdminController::class,"viewcheaf"]);

Route::post("/uploadchef",[AdminController::class,"uploadchef"]);

Route::get("/deletechef/{id}",[AdminController::class,"deletechef"]);

Route::get("/updatechef/{id}",[AdminController::class,"updatechef"]);

Route::post("/updatefoodchef/{id}",[AdminController::class,"updatefoodchef"]);

Route::post("/uploadfood",[AdminController::class,"upload"]);

Route::get("/deletemenu/{id}",[AdminController::class,"deletemenu"]);

Route::get("/categories",[AdminController::class,"categories"]);

Route::get("/deletecategories/{id}",[AdminController::class,"deletecategories"]);

Route::post("/uploadcategories",[AdminController::class,"uploadcategories"]);

Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);

Route::get("/updateview/{id}",[AdminController::class,"updateview"]);

Route::post("/update/{id}",[AdminController::class,"update"]);

Route::post("/reservation",[AdminController::class,"reservation"]);

Route::get("/viewreservation",[AdminController::class,"viewreservation"]);

Route::get("/redirects",[HomeController::class,"redirects"]);

Route::get("/food",[HomeController::class,"food"]);

Route::get("/foodcheaf",[HomeController::class,"cheaf"]);

Route::get('/reservation', function () {
    $categories = Category::all();
    $foodchefs = foodchef::all();

    return view('reservation')->with(compact('categories','foodchefs'));
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
