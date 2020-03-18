<?php

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
Route::get("/","PageController@home")->name("home");
Route::get("/corso", "PageController@corso")->name("corso");
Route::get("post/corso", "PageController@postCorso")->name("postCorso");
Route::get('/students', "PageController@showStudents")->name("students");
Route::get("/show/student/{id}","PageController@showStudent")->name("showStudent");
// Route::get('/', function () {
//     return view('welcome');
// });
