<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\IvaController;
use App\Http\Controllers\ProveedorController;

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

Route::controller(ClienteController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('clientes/create','create');
    Route::get('clientes','list');
    Route::get('clientes/{id}','show');
    //methods forms
    Route::put('clientes/{id}', 'update');
    Route::post('clientes', 'store');
    Route::delete('clientes/{id}', 'destroy');
});
Route:: controller(ProveedorController::class)-> group(function(){
    Route::get('proveedores', 'index')->name('proveedores');
    Route::get('proveedores/create', 'create')->name('proveedores/create');
    Route::get('proveedores/{id}/edit', 'edit');
    Route::get('proveedores/{id}', 'show')->name('proveedores/{id}');

    //methods forms
    Route:: put('proveedores', 'edit');
    Route::post('proveedores', 'store')->name('proveedores.store');
    Route::delete('proveedores', 'delete');
});


// Route::get('/{db_table}/{search}', function ($db_table, $search) {

//     return $search;
// })->where(array( 'search'=> '.*', 'db_table' =>['clientes', 'localidades', 'proveedores']));
