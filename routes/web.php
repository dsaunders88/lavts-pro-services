<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TabsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\FormatsController;

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

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);
Route::get('capabilities/{id}', [TabsController::class, 'show']);
Route::get('products-test', [ProductsController::class, 'show']);
Route::get('formats/{productId}', [FormatsController::class, 'show']);
