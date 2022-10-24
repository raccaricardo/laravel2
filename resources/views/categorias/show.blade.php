@extends('layouts.template')
@section('title', 'Editar Categoria')


@section('content')
    <h1 class="h3 pt-5 fw-bold">
        <ins>Categoria {{$categoria->id}}: {{$categoria->nombre }}</ins>
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

    <form action="{{ route('categorias.update', ['id'=>$categoria->id]) }}" method='POST'>
        @method('PATCH')
        @csrf
           <div class="form-group">
            <label for="input_name">Nombre</label>
        <input autofocus type="text" class="form-control @error('nombre') is-invalid @enderror" id="input_name"
                name="nombre" aria-describedby="name" placeholder="Ingrese IVA">
            <small id="name" class="form-text text-muted">We'll never share your information with anyone else.</small>
            {{-- @error('nombre')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    Please choose a username.
                </div>
            @enderror --}}
        </div>
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
