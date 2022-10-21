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

    <form action="{{ url('/clientes') }}" method='post'>
        @csrf

        <div class="form-group">
            <label for="input_nombre">Nombre</label>
            <input autofocus type="text" class="form-control @error('input_nombre') is-invalid @enderror" id="input_nombre"
                name="nombre" aria-describedby="name" placeholder="Ingrese su nombre">
            <small id="name" class="form-text text-muted">We'll never share your information with anyone else.</small>
            @error('input_nombre')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    Please choose a username.
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
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
