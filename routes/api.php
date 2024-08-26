<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CategoryController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::get('tasks', [TaskController::class, 'index']);        // Obtener todas las tareas
Route::post('tasks', [TaskController::class, 'store']);       // Crear una nueva tarea
Route::get('tasks/{id}', [TaskController::class, 'show']);    // Obtener una tarea específica
Route::put('tasks/{id}', [TaskController::class, 'update']);  // Actualizar una tarea específica
Route::delete('tasks/{id}', [TaskController::class, 'destroy']); // Eliminar una tarea específica

// Rutas para Categories
Route::get('categories', [CategoryController::class, 'index']);        // Obtener todas las categorías
Route::post('categories', [CategoryController::class, 'store']);       // Crear una nueva categoría
Route::get('categories/{id}', [CategoryController::class, 'show']);    // Obtener una categoría específica
Route::put('categories/{id}', [CategoryController::class, 'update']);  // Actualizar una categoría específica
Route::delete('categories/{id}', [CategoryController::class, 'destroy']); // Eliminar una categoría específica