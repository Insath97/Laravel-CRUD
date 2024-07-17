<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

Route::get('/',[CrudController::class,'index'])->name('index');

Route::resource('crud',CrudController::class);
