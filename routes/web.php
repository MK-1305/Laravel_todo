<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class, 'index'])->name('todos.index');
Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');
Route::get('/todos/new', [TodoController::class, 'new'])->name('todos.new');
Route::post('/todos', [TodoController::class, 'store'])->name('todos.store');