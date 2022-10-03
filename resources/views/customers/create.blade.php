@extends('layouts.template')
@section('title', 'Agregar cliente')
@section('content')







CREAR UN NUEVO

<form action="{{url('/customers')}}" method='post'>
    @csrf

    <div class="form-group">
        <label for="input_name">Nombre</label>
        <input type="text" class="form-control" id="input_name" name="input_name" aria-describedby="name" placeholder="Ingrese su nombre">
        <small id="name" class="form-text text-muted">We'll never share your information with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="surname">Apellido</label>
        <input type="text" class="form-control" id="input_surname" name="input_surname" aria-describedby="surname" placeholder="Ingrese su apellido">
    </div>

    <div class="form-group">
        <label for="select_city_id">Ciudad</label>
        <select class="form-control" id="select_city_id" name='select_city_id'>
            <option value="0" selected="selected">Seleccione una ciudad</option>
            @foreach ($cities as $city)
                <option value="{{$city->id}}">{{$city->name}}</option>
            @endforeach

        </select>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="input_email" name="input_email" aria-describedby="emailHelp" placeholder="Ingrese su correo electronico">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
