@extends('layouts.template')
@section('title', 'Index clientes')
@section('content')


    <div class="container-fluid">

        <h1>Listado de Clientes </h1>
        <a href="{{ url('/customers/create') }}" class='btn btn-primary mt-5 mb-2 focus'>Anadir nuevo cliente</a>
        <div class="table-responsive">

            <table class='table table-responsive table-dark table-striped captation-top'>
                <thead class='table-dark'>
                    <tr>
                        <td scope='col'>Id</td>
                        <td scope='col'>Nombre</td>
                        <td scope='col'>Apellido</td>
                        <td scope='col'>Email</td>
                        <td scope='col'>City</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @isset($customers)
                        @foreach ($customers as $item)
                            <tr>
                                <td scope='row'>{{ $item->id }} </td>
                                <td>{{ $item->name }} </td>
                                <td>{{ $item->surname }} </td>
                                <td>{{ $item->email }} </td>
                                <td>{{ $item->cities->name }} </td>

                                <td>
                                    <a href="/customers/{{ $item->id }}" class='btn btn-primary w-100 mb-1'>Editar</a>
                                    <form action="{{ url('/customers/' . $item->id) }}" method='post'>
                                        @csrf
                                        @method('DELETE')
                                        <button type='submit' class='btn btn-danger w-100'>Borrar</a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endisset
                </tbody>
            </table>
        </div>
    </div>

@endsection
