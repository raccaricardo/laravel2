@extends('layouts.template')
@section('title', 'Agregar Proveedor')

@section('content')

<div class='page-header mt-5'>
    <h1>Agregar nuevo proveedor</h1>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>

        @endforeach
    </ul>
</div>
@endif


<form action="{{ route('proveedores.store') }}" method='post'>
    @csrf
    <x-proveedor-form :localidades=$localidades titulo='Informacion de Proveedor' :ivas=$ivas :proveedor=$proveedor />
    <button type="submit" class="btn btn-primary mt-2">Guardar nuevo Proveedor</button>
</form>

@endsection