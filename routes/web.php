<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FabricanteController;
use App\Http\Controllers\IvaController;
use App\Http\Controllers\ProviderController;

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
Route::pattern('id', '[0-9]+');

Route::controller(CustomerController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('customers/create','create');
    Route::get('customers','list');
    Route::get('customers/{id}','show');
    //methods forms
    Route::put('customers/{id}', 'update');
    Route::post('customers', 'store');
    Route::delete('customers/{id}', 'destroy');
});
Route::controller(IvaController::class)-> group(function (){
    Route::get('ivas', 'index')->name('iva/index');
    Route::get('ivas/create', 'create')->name('iva/create');
    Route::get('ivas/{id}', 'show')->name('iva/show');
    //methods forms
    Route::put('ivas/{id}', 'update');
    Route::post('ivas', 'store');
    Route::delete('ivas/{id}', 'destroy');
});
Route:: controller(ProviderController::class)-> group(function(){
    Route::get('providers', 'index')->name('providers');
    Route::get('providers/create', 'create')->name('providers/create');
    Route::get('providers/{id}/edit', 'edit');
    Route::get('providers/{id}', 'show')->name('providers/{id}');

    //methods forms
    Route:: put('providers', 'edit');
    Route::post('providers', 'store')->name('proveedores.store');
    Route::delete('providers', 'delete');
});
Route::controller(FabricanteController::class)->group(function () {
    Route::get('/fabricantes', 'index');
    Route::get('/fabricantes/{id}', 'show');

    Route::post('/fabricantes', 'store');
});

// Route::get('/{db_table}/{search}', function ($db_table, $search) {

//     return $search;
// })->where(array( 'search'=> '.*', 'db_table' =>['customers', 'cities', 'providers']));
