@extends('layouts.template')
@section('title', 'Proveedores')
@section('content')

    @if($errors->any())
        <div class='alert alert-danger'>
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>

    @endif


    <div class="container-fluid">

        <h1>Listado de Proveedores</h1>
        <a href="{{ url('/providers/create') }}" class='btn btn-primary mt-5 mb-2 focus'>Anadir nuevo proveedor</a>
        <div class="table-responsive">

            <table class='table table-responsive table-dark table-striped captation-top'>
                <thead class='table-dark'>
                    <tr>
                        <td scope='col'>Id</td>
                        <td scope='col'>Nombre</td>
                        <td scope='col'>Razon social</td>
                        <td scope='col'>Direccion</td>
                        <td scope='col'>CP</td>
                        <td scope='col'>Localidad</td>
                        <td scope='col'>IVA</td>
                        <td scope='col'>Email</td>
                        <td scope='col'>Sitio web</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($providers))
                        @foreach ($providers as $item)
                            <tr>
                                <td scope='row'>{{ $item->id }} </td>
                                <td>{{ $item->name }} </td>
                                <td>{{ $item->business_name }} </td>
                                <td>{{ $item->address }} </td>
                                <td>{{ $item->cp }} </td>
                                <td>{{ $item->cities-> name }} </td>
                                <td>{{ $item->fiscalCondition-> name }} </td>
                                <td>{{ $item->email }} </td>
                                <td>{{ $item->website }} </td>

                                <td>
                                    <a href="/providers/{{ $item->id }}/edit" class='btn btn-primary w-100 mb-1'>Editar</a>
                                    <form action="{{ url('/providers/' . $item->id) }}" method='post'>
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
