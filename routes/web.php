<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [ContactController::class, 'index']);
Route::get('/contact', [ContactController::class, 'create']);
Route::post('/contact', [ContactController::class, 'store']);
Route::get('/edit/{id}', [ContactController::class, 'edit'])->name('contacts.edit');
Route::put('/edit', [ContactController::class, 'update']);
Route::get('/details/{id}', [ContactController::class, 'details'])->name('contacts.details');
Route::delete('/contact/{id}', [ContactController::class, 'delete'])->name('contacts.delete');
