<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tablecontroller;
use App\Http\Controllers\SessionController;

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
    return view('home');
});

// Route::get('/table', function () {
//     return view('table');
// });

Route::get('/home', function () {
    return view('.page/landingpage');
});

Route::get('/about', function () {
    return view('.page/about');
});

Route::get('/trending', function () {
    return view('.page/trending');
});

Route::get('/contact', function () {
    return view('.page/contact');
});


Route::get('datatable',[tablecontroller::class,'index']);

Route::get('table/add_data',[tablecontroller::class,'create']);

Route::post('table/add_data',[tablecontroller::class,'store']);

Route::delete('table/destroy/{id}',[tablecontroller::class,'destroy']);

Route::get('table/detail/{id}',[tablecontroller::class,'show']);

Route::get('/edittable/update/{id}',[tablecontroller::class,'edit']);

Route::patch('/edittable/update/{id}',[tablecontroller::class,'update']);




