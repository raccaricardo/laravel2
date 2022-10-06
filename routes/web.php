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

Route::pattern('id', '[0-9]+');

Route::controller(CustomerController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('customers/create','create');
    Route::get('customers','list');
    Route::get('customers/{id}','show');
    //methos forms
    Route::put('customers/{id}', 'update');
    Route::delete('customers/{id}', 'destroy');
    Route::post('customers', 'store'); 
});
// Route::get
// ('customers/{id}/edit', [CustomerController::class, 'edit']);


// Route::get('/{db_table}/{search}', function ($db_table, $search) {
    
//     return $search; 
// })->where(array( 'search'=> '.*', 'db_table' =>['customers', 'cities', 'providers']));