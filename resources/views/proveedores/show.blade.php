@extends('layouts.template')
@section('title', 'Descripcion de proveedor')


@section('content')

<div class="page-header mt-5">
    <h1>Detalles de proveedor:</h1>
    <h2>{{ $proveedor->nombre }}</h2>
</div>

<form action="{{ route('proveedores.update',['id' => $proveedor->id]) }}" id='form' method='post'>
    @csrf
    @method('PUT')
    <x-proveedor-form :localidades=$localidades titulo='Informacion de Proveedor' :ivas=$ivas :proveedor=$proveedor/>
    <button type='button' class="btn btn-secondary me-3 mt-3" id='btn-enable-form' onClick='enableForm()'>Editar</button>
    <button type="submit" id="btn-save" class="btn btn-primary ms-3 mt-3" disabled>Guardar</button>


</form>

@section('scripts')
<script>
    function enableForm() {

        let form_elements = document.querySelectorAll('[disabled]')
        form_elements.forEach(e => e.removeAttribute('disabled'));

    }
    
</script>

@endsection
@endsection