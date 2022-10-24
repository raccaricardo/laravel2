@extends('layouts.template')
@section('title', 'Proveedores')
@section('content')

    @if ($errors->any())
        <div class='alert alert-danger'>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif

    
    <div class="container-fluid">
        <h1 class="h3 pt-5 fw-bold">
            Listado de Proveedores
        </h1>

        <a href="{{ url('/proveedores/create') }}" class='btn btn-primary mt-5 mb-2 focus'>Anadir nuevo proveedor</a>
        <div class="table-responsive">

            <table class='table table-responsive table-dark table-striped captation-top'>
                <thead class='table-dark'>
                    <tr>
                        <td scope='col'>Id</td>
                        <td scope='col'>Nombre</td>
                        <td scope='col'>Localidad</td>
                        <td scope='col'>Telefono</td>
                        <td scope='col'>Email</td>
                        <td scope='col'>Sitio web</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($proveedores))
                        @foreach ($proveedores as $item)
                            <tr>
                                <td scope='row'>
                                    {{ $item->id }} </td>
                                <td>{{ $item->nombre }} </td>
                                <td>{{ $item->localidades->nombre }} </td>
                                <td>{{ $item->telefono }} </td>
                                <td>{{ $item->email }} </td>
                                <td>{{ $item->sitio_web }} </td>

                                <td>
                                    <a href="/proveedores/{{ $item->id }}" class='btn btn-primary w-100 mb-1'>Editar</a>
                                    <form action="{{ route('proveedores.delete', ['id' => $item->id]) }}" method='post'>
                                        @csrf
                                        @method('DELETE')
                                        <button type='submit' class='btn btn-danger w-100'>Borrar</a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection
