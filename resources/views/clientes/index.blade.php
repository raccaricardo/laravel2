@extends('layouts.template')
@section('title', 'Index clientes')
@section('content')


    <div class="container-fluid">

        <h1 class="h3 pt-5 fw-bold">
            Listado de Clientes
        </h1>

        <a href="{{ route('clientes.create') }}" class='btn btn-primary mt-5 mb-2 focus'>Anadir nuevo cliente</a>
        @livewire('clientes-index', ["localidades"=> $localidades, "clientes"=> $clientes])

    </div>

@endsection
