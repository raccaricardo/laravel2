@extends('layouts.template')
@section('title', 'Index sistema')

@section('title', 'Index IVA')
@section('content')
<div class="container">

    <h1>IVA </h1>
    <a href="{{url('/ivas/create')}}" class='btn btn-primary mt-5 mb-2 focus'>Anadir nuevo cliente</a>
    <div class="table-responsive">

        <table class='table table-responsive table-dark table-striped captation-top'>
            <thead class='table-dark'>
                <tr>
                    <td scope='col'>Id</td>
                    <td scope='col'>Nombre</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                @foreach ($iva as $item)
                    <tr>
                        <td scope='row'>{{ $item->id }} </td>
                        <td>{{ $item->name }} </td>
                        <td>
                            <a href="/ivas/{{$item->id}}" class='btn btn-primary w-100 mb-1'>Editar</a>
                            <form action="{{ url('/ivas/'.$item->id) }}" method='post'>
                                @csrf
                                @method('DELETE')
                                <button type='submit' class='btn btn-danger w-100'>Borrar</a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection