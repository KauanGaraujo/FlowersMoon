<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlowersController;

Route::get('/',[FlowersController::class, 'index'])->name('index');
Route::get('/register',[FlowersController::class,'showFormFlowers'])->name('register-flowers');
Route::post('/register',[FlowersController::class, 'storeFlowers'])->name('register-flowers');
 
Route::get('/All',[FlowersController::class,'showGerenciador'])->name('all-flowers');
 
Route::delete('/delete-flowers/{id}',[FlowersController::class,'destroy'])->name('delete-flowers');

Route ::get('/change/{id}',[FlowersController::class,'show'])->name('change-flowers');
Route::put('/changeFlowers/{id}',[FlowersController::class, 'update'])->name('changeFlowers-Flowers');


