<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/Posts', [PostController::class, 'index']);
Route::get('/tambah_posts', [PostController::class, 'tambah_posts']);
Route::post('/Posts', [PostController::class, 'simpan_post']);
Route::get('/Posts/{id}', [PostController::class, 'edit_post']);
Route::put('/Posts/{id}', [PostController::class, 'update_posts']);
Route::delete('/Posts/{id}', [PostController::class, 'delete_post']);
