<?php

use App\Http\Controllers\BookController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route :: get('/',[BookController :: class,'index']) ->name('index');
Route::get('/book/{id}/show', [BookController::class, 'show'])->name('book.show');

Route ::get('book/create',[BookController :: class ,'create'] ) -> name ('book.create');
Route :: post('book/store',[BookController :: class ,'store'] ) -> name ('store');
Route :: get('book/edit/{id}',[BookController :: class ,'edit'] ) -> name('books.edit');
Route :: put('book/update/{id}',[BookController :: class ,'update'] ) -> name('books.update');
Route :: delete('book/delete/{id}',[BookController :: class ,'destroy'] ) -> name('delete');




