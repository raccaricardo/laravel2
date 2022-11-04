@extends('layouts.template')
@section('title', 'Index clientes')
@section('content')


    <div class="container-fluid">

        <h1 class="h3 pt-5 fw-bold">
            Listado de Clientes
        </h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mt-3 mb-2" data-bs-toggle="modal" data-bs-target="#modalCrear">
            Agregar nuevo cliente
        </button>
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
        @if (Session::has('cliente_created'))
            <div class="alert alert-sucess bg-success">
                {{ Session::get('cliente_created') }}
            </div>
        @endif
        @if (Session::has('cliente_edited'))
            <div class="alert alert-secondary bg-success">
                {{ Session::get('cliente_edited') }}
            </div>
        @endif
        @if (Session::has('cliente_deleted'))
            <div class="alert alert-danger bg-alert">
                {{ Session::get('cliente_deleted') }}
            </div>
        @endif
        <!-- Modal -->
        <div class="modal fade" id="modalCrear" tabindex="-1" aria-labelledby="modalAdd" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalAdd">Agregar nueva Categoria</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('clientes.store') }}" method='post'>
                            <x-cliente-form :localidades=$localidades titulo='' />
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->

        @livewire('clientes.clientes-index')


    </div>

@endsection
