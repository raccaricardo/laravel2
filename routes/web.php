<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FabricanteController;
use App\Http\Controllers\ProveedorController;

Route::pattern('id', '[0-9]+');

// Route::get('/', 'index')->name('dashboard');

Route::controller(ClienteController::class)->group(function () {
    Route::get('/', 'index')->name('clientes.index');
    Route::get('clientes/create','create')->name('clientes.create');
    Route::get('clientes','list')->name('clientes.list'); //ruta de prueba de disenos
    Route::get('clientes/{id}','show')->name('clientes.show');
    //methods form->name(''clientes.')s
    Route::patch('clientes/{id}', 'update')->name('clientes.update');
    Route::post('clientes', 'store')->name('clientes.store');
    Route::delete('clientes/{id}', 'destroy')->name('clientes.destroy');
});
Route:: controller(ProveedorController::class)-> group(function(){
    Route::get('proveedores', 'index')->name('proveedores.index');
    Route::get('proveedores/create', 'create')->name('proveedores.create');
    Route::get('proveedores/{id}', 'show')->name('proveedores.show');

    //methods forms
    Route::put('proveedores/{id}', 'update')->name('proveedores.update');
    Route::post('proveedores', 'store')->name('proveedores.store');
    Route::delete('proveedores/{id}', 'destroy')->name('proveedores.delete');
});
Route::controller(CategoriaController::class)->group(function () {
    Route::get('/categorias', 'index')->name('categorias.index');
    Route::get('/categorias/create', 'create')->name('categorias.create');
    Route::get('/categorias/{id}', 'show')->name('categorias.show');
    Route::post('/categorias', 'store')->name('categorias.store');
        //methods forms
        Route::post('categorias/', 'store')->name('categorias.store');
        Route:: patch('categorias/{id}', 'update')->name('categorias.update');
        Route::delete('categorias/{id}', 'destroy')->name('categorias.delete');
});
Route::controller(FabricanteController::class)->group(function () {
    Route::get('/fabricantes', 'index')->name('fabricantes.index');
    Route::get('/fabricantes/create', 'create')->name('fabricantes.create');
    Route::get('/fabricantes/{id}', 'show')->name('fabricantes.show');
    Route::post('/fabricantes', 'store')->name('fabricantes.store');
        //methods forms
        Route::post('fabricantes', 'store')->name('fabricantes.store');
        Route:: patch('fabricantes/{id}', 'update')->name('fabricantes.update');
        Route::delete('fabricantes/{id}', 'destroy')->name('fabricantes.delete');
});

// Route::get('/{db_table}/{search}', function ($db_table, $search) {

//     return $search;
// })->where(array( 'search'=> '.*', 'db_table' =>['clientes', 'localidades', 'proveedores']));
