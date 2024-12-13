<?php

use Illuminate\Http\Request;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    return view('blog', ['data' => 'Programmer Pemula yang siap belajar']);
});

// Route::view('/blog', 'blog', ['data'=>'Programmer Pemula yang siap belajar']);

//parameter ROute
// Route::get('/blog/1', function () {
//     return "ini adalah halaman blog 1";
// });
//paramater route agar dinamic

// Route::get('/blog/{id}', function ($id) {
//     return "ini adalah halaman blog " . $id;
// });

Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/add', [BlogController::class, 'add']);
Route::post('blog/create', [BlogController::class, 'create']);
Route::get('blog/{id}/detail', [BlogController::class, 'show']);
Route::get('blog/{id}/edit', [BlogController::class, 'edit']);
Route::patch('blog/{id}/update', [BlogController::class, 'update']);
Route::get('blog/{id}/delete', [BlogController::class, 'delete']);
// Route::get('/blog/create', [BlogController::class, 'create']);


