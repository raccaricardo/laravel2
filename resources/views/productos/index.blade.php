@extends('layouts.template')
@section('title', 'Productos')
@section('content')


    <div class="container-fluid">

        <h1 class="h3 pt-5 fw-bold">
            Listado de Productos
        </h1>

        <!-- Manejo errores formulario -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ins>
                    <h4>No se pudo crear categoria</h4>
                </ins>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>a
                    @endforeach
                </ul>
            </div>
        @endif
        <!--Fin manejo de errores-->
        @if (Session::has('cat_created'))
            <div class="alert alert-sucess bg-success">
                {{ Session::get('cat_created') }}
            </div>
        @endif
        @if (Session::has('cat_edited'))
            <div class="alert alert-sucess bg-success">
                {{ Session::get('cat_edited') }}
            </div>
        @endif
        @if (Session::has('cat_deleted'))
            <div class="alert alert-sucess bg-success">
                {{ Session::get('cat_deleted') }}
            </div>
        @endif
        
        @livewire('productos.productos-index')

    </div>

@endsection
