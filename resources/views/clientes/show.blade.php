@extends('layouts.template')
@section('title', 'Descripcion de cliente')


@section('content')
    @if (!isset($cliente))
        <div class="page-header mt-5">
            <h1>
                USUARIO NO ENCONTRADO
            </h1>
        </div>
        @extends('layouts.template')
@section('title', 'Agregar cliente')
@section('content')

    CREAR UN NUEVO

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ url('/clientes') }}" method='put'>
        @csrf

        <div class="form-group">
            <label for="input_nombre">Nombre</label>
            <input autofocus type="text" class="form-control @error('nombre') is-invalid @enderror" id="input_nombre"
                name="nombre" aria-describedby="name" placeholder="Nombre">
            @error('input_nombre')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    Por favor ingrese un nombre
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="surname">Apellido</label>
            <input type="text" class="form-control" id="input_apellido" name="apellido" aria-describedby="surname"
                placeholder="Ingrese su apellido">
        </div>
        <div class="form-group">
            <label for="address">Direccion</label>
            <input type="text" class="form-control" id="input_direccion" name="direccion" aria-describedby="address"
                placeholder="Ingrese su direccion">
        </div>
        <div class="form-group">
            <label for="phone">Telefono</label>
            <input type="text" class="form-control" id="input_telefono" name="telefono" aria-describedby="phone"
                placeholder="Ingrese su numero de telefono">
        </div>
        <div class="form-group">
            <div class="row">
                <label for="input_localidad_id">Ciudad</label>
                <select class="form-select" name="localidad" id="input_localidad_id">
                    <option value="">Seleccione una ciudad</option>
                    @foreach ($localidades as $localidad)
                        <option value="{{ $localidad->id }}">{{ $localidad->nombre }}</option>
                    @endforeach
                </select>


            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="input_email" name="email" aria-describedby="emailHelp"
                placeholder="Ingrese su correo electronico">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection


    @section('scripts')
        <script>
            function enableForm() {

                let form_elements = document.querySelectorAll('[disabled]')

                console.log(form_elements);
                form_elements.forEach(e => e.removeAttribute('disabled'));

            }
        </script>

    @endsection
@endsection
