<?php

use App\Http\Controllers\ProduitController;
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

Route::get('/bo/produit/list', [ProduitController::class, 'index'])->name('index');
Route::get('/bo/create', [ProduitController::class, 'create'])->name('create');
Route::post('/', [ProduitController::class, 'store'])->name('store');
Route::delete('/{produit:id}', [ProduitController::class, 'destroy'])->name('destroy');
Route::get('/bo/produit/edit/{produit:id}', [ProduitController::class, 'update'])->name('update');




Route::get('/bo', function(){
    return view('backoffice');
});

Route::get('/bo/produit', function(){
    return view('produit');
});

Route::get('/bo/produit/create', function(){
    return view('create');
});




// DEBUG
Route::get('/home', function(){
    return view('create'); 
});