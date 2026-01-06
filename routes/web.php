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
Route::get('/address-table-view',[proconaddController::class,'addresstable'])->name('addressTable');

// for single view data

Route::get('/address-data-view/{id}',[proconaddController::class,'addressview'])->name('addressDataview');
Route::get('/profile-data-view/{about}',[proconaddController::class,'profileview'])->name('profileDataview');
Route::get('/contact-data-view/{id}',[proconaddController::class,'contactview'])->name('contactDataview');

//for edit profile
Route::get('/profile-data-edit/{about}',[proconaddController::class,'profileedit'])->name('profileDataedit');

// for edit contact
Route::get('/contact-data-edit/{contact}',[proconaddController::class,'contactedit'])->name('contactDataedit');

// for edit address
Route::get('/address-data-edit/{address}',[proconaddController::class,'addressedit'])->name('addressDataedit');

// for update profile
Route::post('/profile-update/{about}',[proconaddController::class,'updateProfile'])->name('profileUpdate');

Route::post('/about-mine',[AboutmineController::class,'profilestore'])->name('profileStore');
Route::post('/contact-mine',[AboutmineController::class,'contactstore'])->name('contactStore');
Route::post('/address-mine',[AboutmineController::class,'addressstore'])->name('addressStore');

