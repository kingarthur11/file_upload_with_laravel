<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AdvertController;


Route::get('/advert', [AdvertController::class, 'index']);
Route::post('/upload', [AdvertController::class, 'uploadAdvert']);
Route::get('/', [AdvertController::class, 'test']);
