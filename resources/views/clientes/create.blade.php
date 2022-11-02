@extends('layouts.template')
@section('title', 'Agregar cliente')
@section('content')

<h1 class="h3 pt-4 fw-bold">
    Nuevo cliente:
</h1>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('clientes.store') }}" method='post' class="pt-5">
    @csrf

    <x-cliente-form :localidades=$localidades titulo='' ></x-cliente-form>
    <button type="submit" class="btn btn-primary mt-3">Guardar nuevo cliente</button>

</form>

@endsection



