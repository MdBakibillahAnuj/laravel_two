<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\ManageController;



Route::get('/',[ViewController::class,'index'])->name('home');
Route::get('/add-product',[ViewController::class,'ManageProduct'])->name('add-product');
Route::get('/show-product',[ViewController::class,'viewProduct'])->name('show-product');

//Rout For Crud
Route::post('/new-product',[ManageController::class,'newProduct'])->name('new-product');

