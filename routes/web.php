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

Route::get('/template', function () {
    return view('template.master');
});

Route::controller(SppController::class)->group(function(){
    Route::get('/spp', 'index')->name('spp.index');
    Route::get('/spp/create', 'create')->name('spp.create');
    Route::post('/spp', 'store')->name('spp.store');
    Route::get('/spp/{id}/edit','edit')->name('spp.edit');
    Route::put('/spp/{id}','update')->name('spp.update');
    Route::delete('/spp/{id}','destroy')->name('spp.destroy');
    });