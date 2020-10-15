<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;

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

Route::get('users',[UsersController::class, 'index']);
Route::post('users',[UsersController::class, 'store']);

Route::get('/posts/{id}',[PostsController::class, 'show']);

Route::get('/project',[ProjectsController::class, 'index'])->name('project.index');
Route::get('/project/create',[ProjectsController::class, 'create'])->name('project.create');
Route::post('/project/',[ProjectsController::class, 'store'])->name('project.store');
Route::get('/project/{project}',[ProjectsController::class, 'show'])->name('project.show');
Route::get('/project/{project}/edit',[ProjectsController::class, 'edit'])->name('project.edit');
Route::put('/project/{project}',[ProjectsController::class, 'update'])->name('project.update');


