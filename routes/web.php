<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
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
//     return view('index');
// });


Route::get
('/', [CustomerController::class, 'index']);
Route::get
('customers', [CustomerController::class, 'index']);
Route::get
('customers/create', [CustomerController::class, 'create']);
Route::get
('customers/{id}', [CustomerController::class, 'show']);
// Route::get
// ('customers/{id}/edit', [CustomerController::class, 'edit']);

Route::delete
('customers/{id}', [CustomerController::class, 'destroy']);
Route::post
('customers', [CustomerController::class, 'store']);
Route::put
('customers/{id}', [CustomerController::class, 'update']);

