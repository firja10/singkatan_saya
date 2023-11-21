<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});



Route::get('/filter_kamus', [\App\Http\Controllers\SingkatanController::class,'get_search'])->name('get_search');

// Route::get('/filter_kamus', 'SingkatanController@get_search');

// Route::get('/filter_kamus/id', function () {
//     return view('index_id');
// });


Route::get('/filter_kamus_id', [\App\Http\Controllers\SingkatanController::class,'get_id'])->name('get_id');