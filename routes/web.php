<?php

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

Route::get('/{id?}', function ($id = null) {
    $med = App\Med::find($id);
    $randomMeds = App\Med::orderByRaw('RAND()')->take(10)->get();
    return view('med',compact('id','med','randomMeds'));
})->name('med');
