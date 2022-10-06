@extends('layouts.template')
@section('title', 'Index clientes')
@section('content')


    <div class="container">

        <h1>Listado de Clientes </h1>
        <a href="{{ url('/customers/create') }}" class='btn btn-primary mt-5 mb-2 focus'>Anadir nuevo cliente</a>

        <div class="card" style="width: 100%;">
            <div class="card-header">
                {{ $customers[0]->name . ' ' . $customers[0]->surname }}
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{ $customers[0]->email }}</li>
                <li class="list-group-item">{{ $customers[0]->cities->name }}</li>
                <li  class='d-flex align-items-center justify-content-center'>
                  <a href="/customers/{{ $customers[0]->id }}" class='btn btn-primary mb-1 me-2 '>Editar</a>
                  <form action="{{ url('/customers/' . $customers[0]->id) }}" method='post'>
                      @csrf
                      @method('DELETE')
                      <button type='submit' class='btn btn-danger '>Borrar</a>
                  </form>
                </li>
            </ul>
        </div>
    </div>

@endsection
