<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/profiles', [ProfileController::class, 'getAllProfiles']);
Route::get('/profiles/{id}', [ProfileController::class, 'getProfile']);