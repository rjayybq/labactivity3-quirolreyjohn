<?php

use App\http\Controllers\ProjectController;
use Illuminate\Support\Facades\route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('projects', [ProjectController::class, 'index']); 
Route::get('projects/create', [ProjectController::class, 'create']);
Route::post('projects', [ProjectController::class, 'store']);
Route::get('projects/{show}', [ProjectController::class, 'show']);
Route::get('projects/{Rey John}/edit', [ProjectController::class, 'edit']);
Route::get('projects/{update}', [ProjectController::class, 'update']);
Route::delete('projects/{delete}', [ProjectController::class, 'show']);