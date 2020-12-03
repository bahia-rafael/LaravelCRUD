<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('todos', [TodoController::class, 'index']);

Route::get('todos/create', [TodoController::class, 'create']);

Route::get('todos/{todo}/edit', [TodoController::class, 'edit']);

Route::get('todos/{todo}', [TodoController::class, 'show']);

Route::get('todos/{todo}/destroy', [TodoController::class, 'destroy']);

Route::post('todos/store', [TodoController::class, 'store']);
Route::post('todos/{todo}/update', [TodoController::class, 'update']);

