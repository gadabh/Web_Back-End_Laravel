<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\listpropController;
use App\Http\Controllers\listhebergementsController;
use App\Http\Controllers\guideController;
use App\Http\Controllers\reclamationsController;
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


Route::middleware(['auth:sanctum', 'verified'])->get('/',[listpropController::class,'show'])->name('listprop');

Route::middleware(['auth:sanctum', 'verified'])->get('/listprop',[listpropController::class,'show'])->name('listprop');
Route::middleware(['auth:sanctum', 'verified'])->get('/heberg',[listhebergementsController::class,'show'])->name('heberg');
Route::middleware(['auth:sanctum', 'verified'])->get('/reclamations',[reclamationsController::class,'show'])->name('reclamations');
Route::middleware(['auth:sanctum', 'verified'])->get('/guide',[guideController::class,'show'])->name('guide');

//******prop ********************************************************/
//Route::Get('listprop',[listpropController::Class,'listprop']);
Route::Get('deleteprop/{id}',[listpropController::Class,'deleteprop']);






//****reclamations **************************************************/


Route::Get('deleterec/{id}',[reclamationsController::Class,'deleterec']);
Route::Get('editrec/{id}',[reclamationsController::Class,'editrec']); 
Route::Get('Showrec/{id}',[reclamationsController::Class,'showData']);// hethy mate5demchhhhh


Route::Get('updatRec',[reclamationsController::Class,'updaterec']); 







//*****hebergement ****************/
Route::Get('listhebergement',[listhebergementsController::Class,'show']);
Route::Get('delete/{id}',[listhebergementsController::Class,'delete']);
Route::Get('edithebergements/{id}',[listhebergementsController::Class,'edithebergements']);
Route::Get('edit',[listhebergementsController::Class,'show']);




//*****guide************ */
Route::Get('deleteguide/{id}',[guideController::Class,'deleteguide']);
Route::Post('addguide',[guideController::Class,'addguide']);

Route::view('addguide','addguide');




// awel root :http://127.0.0.1:8000/login
