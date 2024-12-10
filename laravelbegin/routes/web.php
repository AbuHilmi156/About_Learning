<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\showData;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[showData::class, 'showData']);
