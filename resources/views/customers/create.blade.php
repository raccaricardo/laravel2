@extends('layouts.template')
@section('title', 'Agregar cliente')
@section('content')

    CREAR UN NUEVO

    <form action="{{ url('/customers') }}" method='post'>
        @csrf

        <div class="form-group">
            <label for="input_name">Nombre</label>
            <input autofocus type="text" class="form-control @error('input_name') is-invalid @enderror" id="input_name"
                name="input_name" aria-describedby="name" placeholder="Ingrese su nombre">
            <small id="name" class="form-text text-muted">We'll never share your information with anyone else.</small>
            @error('input_name')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    Please choose a username.
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="surname">Apellido</label>
            <input type="text" class="form-control" id="input_surname" name="input_surname" aria-describedby="surname"
                placeholder="Ingrese su apellido">
        </div>
        <div class="form-group">
            <label for="address">Direccion</label>
            <input type="text" class="form-control" id="input_address" name="input_address" aria-describedby="address"
                placeholder="Ingrese su direccion">
        </div>
        <div class="form-group">
            <label for="phone">Telefono</label>
            <input type="text" class="form-control" id="input_phone" name="input_phone" aria-describedby="phone"
                placeholder="Ingrese su numero de telefono">
        </div>
        <div class="form-group">
            <div class="row">
                <label for="input_city_id">Ciudad</label>
                <select name="input_city_id" id="input_city_id">
                    <option value="">Seleccione una ciudad</option>
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>

                <button class="btn btn-primary pt-2">Agregar una nueva ciudad</button>

            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="input_email" name="input_email" aria-describedby="emailHelp"
                placeholder="Ingrese su correo electronico">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
