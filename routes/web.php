<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('index');
Route::get('/categoria/{slug}', [App\Http\Controllers\FrontController::class, 'categoria'])->name('categoria');
Route::get('/categoria', [App\Http\Controllers\FrontController::class, 'categoria']);
Route::get('/producto/{slug}', [App\Http\Controllers\FrontController::class, 'producto'])->name('producto');
Route::post('/search', [App\Http\Controllers\FrontController::class, 'buscar'])->name('buscar');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/files/master/pdf/{path}', function ($path) {
    $path = public_path("/files/master/pdf/$path.pdf");
    return response()->file($path);
    })->where('path', '.*')->middleware('web');

Route::resource('categoriaadmin', CategoriesController::class)->names('categorias');
Route::resource('productoadmin', ProductController::class)->names('productos');
