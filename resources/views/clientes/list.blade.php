@extends('layouts.template')
@section('title', 'Index clientes')
@section('content')


    <div class="container">

        <h1>Listado de Clientes </h1>
        <a href="{{ url('/clientes/create') }}" class='btn btn-primary mt-5 mb-2 focus'>Anadir nuevo cliente</a>

        @forelse($clientes as $cliente)
            <p>
                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                    aria-controls="collapseExample">
                    {{$cliente->nombre}}
                </a>

            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    {{$cliente->email}}
                </div>
            </div>
        @empty

        @endforelse


    </div>

    @endsection
