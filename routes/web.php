<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\App;
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

Route::get('/articles', [ArticlesController::class,'index'])->name('articles.index');
Route::get('/articles/create', [ArticlesController::class,'create'])->name('articles.create');
Route::post('/articles',[ArticlesController::class, 'store'])->name('articles.store');

Route::get('/articles/show/{article}',[ArticlesController::class,'show'])->name('articles.show');
Route::get('/articles/{article}/edit',[ArticlesController::class,'edit'])->name('articles.edit');
Route::put('/articles/{article}',[ArticlesController::class,'update'])->name('articles.update');

// Route::get('/container', function (\App\Providers\Example $example)
// {
//     $example->go();
// }
// );


Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
