<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;  // Make sure to import the controller

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dung', function(){
    return view('testView');
});

// Call the index method of testController
Route::get('/testController', [testController::class, 'index']);
