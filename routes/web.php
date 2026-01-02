<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\proconaddController;
use App\Http\Controllers\AboutmineController;

Route::get('/',[proconaddController::class,'show'])->name('showpage');
Route::get('/profile-view',[proconaddController::class,'proview'])->name('profileView');
Route::get('/contact-view',[proconaddController::class,'conview'])->name('contactView');
Route::get('/address-view',[proconaddController::class,'addview'])->name('addressView');
Route::get('/profile-table-view',[proconaddController::class,'profiletable'])->name('profileTable');
Route::get('/contact-table-view',[proconaddController::class,'contacttable'])->name('contactTable');



Route::post('/about-mine',[AboutmineController::class,'profilestore'])->name('profileStore');
Route::post('/contact-mine',[AboutmineController::class,'contactstore'])->name('contactStore');
Route::post('/address-mine',[AboutmineController::class,'addressstore'])->name('addressStore');

