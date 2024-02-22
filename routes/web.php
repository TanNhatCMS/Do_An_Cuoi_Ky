<?php

use App\Http\Controllers\CartController;
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

Route::get('/', [CartController::class, 'Index']);
Route::get('/AddCart/{id}', [CartController::class, 'AddCart']);
Route::get('/DeleteItemCart/{id}', [CartController::class, 'DeleteItemCart']);

Route::get('/ListCart', [CartController::class, 'ViewListCart']);
Route::get('/SaveItemListCart/{id}/{quanty}', [CartController::class, 'SaveListItemCart']);
Route::get('/DeleteItemListCart/{id}', [CartController::class, 'DeleteListItemCart']);




