<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TaskController;
    Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');

Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
    Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');