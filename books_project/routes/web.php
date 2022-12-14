<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CatogryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PubllisherController;
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

Route::view('/','cmc.parent')->name('cmc.parent');
Route::view('/cmc/starter','cmc.login')->name('cmc.login');

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
//------(WRITER)---------------------------------------------------------------------------

 Route::get('/w/index',[ WriterController::class , 'index'])->name('wcw.index');
 Route::get('/w/show/{id}',[ WriterController::class , 'show'])->name('wcw.show');

 Route::get('/w/create',[ WriterController::class , 'create'])->name('wcw.create');
 Route::post('/w/store',[ WriterController::class , 'store'])->name('wcw.store');
 
 Route::get('/w/{id?}/edit',[WriterController::class,'edit'])->name('wcw.edit');
 Route::put('/w/edite/{id}',[WriterController::class,'update'])->name('wcw.update');


Route::delete('/w/{id}',[WriterController::class,'destroy'])->name('wcw.destroy');


//------(Publlisher)---------------------------------------------------------------------------

Route::get('/p/index',[ PubllisherController::class , 'index'])->name('pcp.index');
Route::get('/p/show/{id}',[ PubllisherController::class , 'show'])->name('pcp.show');

Route::get('/p/create',[ PubllisherController::class , 'create'])->name('pcp.create');
Route::post('/p/store',[ PubllisherController::class , 'store'])->name('pcp.store');

Route::get('/p/{id?}/edit',[PubllisherController::class,'edit'])->name('pcp.edit');
Route::put('/p/edite/{id}',[PubllisherController::class,'update'])->name('pcp.update');

Route::delete('/p/{id}',[PubllisherController::class,'destroy'])->name('pcp.destroy');

//------(Ctogry)---------------------------------------------------------------------------

Route::get('/c/index',[ CatogryController::class , 'index'])->name('cat.index');
Route::get('/c/show/{id}',[ CatogryController::class , 'show'])->name('cat.show');

Route::get('/c/create',[ CatogryController::class , 'create'])->name('cat.create');
Route::post('/c/store',[ CatogryController::class , 'store'])->name('cat.store');

Route::get('/c/{id?}/edit',[CatogryController::class,'edit'])->name('cat.edit');
Route::put('/c/edite/{id}',[CatogryController::class,'update'])->name('cat.update');

Route::delete('/c/{id}',[CatogryController::class,'destroy'])->name('cat.destroy');




