@extends('layouts.template')
@section('title', 'Descripcion de subcategoria')


@section('content')
    <h1 class="h3 pt-5 fw-bold">
        <ins>Subcategoria {{$subcategoria->id}}: {{$subcategoria->nombre.' '. $subcategoria->apellido}}</ins>
    </h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>a
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('subcategorias.update', ['id'=>$subcategoria->id]) }}" method='POST'>
        @method('PATCH')
        <x-subcategoria-form :categorias=$categorias titulo='Informacion de subcategoria:' :subcategoria=$subcategoria/>
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
