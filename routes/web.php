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

Route::get('/ajax/wilayas/{id}/communes', function($id){
    return App\Commune::where('wilaya_id', $id)->get();
});

Route::get('/ajax/wilayas/{id}', function($id){
    return App\Commune::findOrFail($id);
});

Route::get('/', function () {
    return view('welcome');
});
