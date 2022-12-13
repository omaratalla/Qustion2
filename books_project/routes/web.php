<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WriterController;
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

// Route::get('/p/parent', function () {
//     return view('cmc.parent');
// });
// Route::get('/i/index', function () {
//     return view('cmc.index');
// });

Route::view('/','cmc.parent');
// Route::view('/i/index','cmc.index')->name('cmc.index');

Route::get('/i/index',[ BookController::class , 'index'])->name('cmc.index');
Route::get('/i/show/{id}',[ BookController::class , 'show'])->name('cmc.show');

Route::get('/i/create',[ BookController::class , 'create'])->name('cmc.create');
Route::post('/i/store',[ BookController::class , 'store'])->name('cmc.store');

Route::get('/i/{id?}/edit',[BookController::class,'edit'])->name('cmc.edit');
Route::put('/i/edite/{id}',[BookController::class,'update'])->name('cmc.update');

// Route::delete('/del/{id}',[BookController::class,'destroy'])->name('cmc.destroy');
Route::delete('/i/{id}',[BookController::class,'destroy'])->name('cmc.destroy');


// Route::resource('/books',BookController::class);
//---------------------------------------------------------------------------------
 Route::view('/w','Writer.parentwriter');

 Route::get('/w/index',[ WriterController::class , 'index'])->name('writer.index');
 Route::get('/w/show/{id}',[ WriterController::class , 'show'])->name('writer.show');

 Route::get('/w/create',[ WriterController::class , 'create'])->name('writer.create');
 Route::post('/w/store',[ WriterController::class , 'store'])->name('writer.store');
 
 Route::get('/w/{id?}/edit',[WriterController::class,'edit'])->name('writer.edit');
 Route::put('/w/edite/{id}',[WriterController::class,'update'])->name('writer.update');


Route::delete('/w/{id}',[BookController::class,'destroy'])->name('writer.destroy');





