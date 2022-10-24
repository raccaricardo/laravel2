@extends('layouts.template')
@section('title', 'Descripcion de cliente')


@section('content')  
    <h1 class="h3 pt-5 fw-bold">
        <ins>Cliente {{$cliente->id}}: {{$cliente->nombre.' '. $cliente->apellido}}</ins>
    </h1>  

    <h1></h1>
    @if ($errors->any()) 
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>a
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('clientes.update', ['id'=>$cliente->id]) }}" method='POST'>
        @method('PUT')
        <x-cliente-form :localidades=$localidades titulo='Informacion de cliente:' :cliente=$cliente/>
        <button type='button' autofocus class="btn btn-secondary me-3 mt-3" id='btn-enable-form'
            onClick='enableForm()'>Editar</button>
        <button type="submit" class="btn btn-primary ms-3 mt-3" disabled>Guardar</button>


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
