@extends('layouts.template')
@section('title', 'Editar cliente')
@section('content')






<h1>Editar usuario {{ $customer -> id }}</h1>
<form action="{{url('/customers/'.$customer ->id)}}" method='POST'>
    @method("PUT")
    @csrf
    <div class="form-group">
        <label for="input_name">Nombre</label>
        <input type="text" class="form-control" id="input_name" name="input_name" aria-describedby="name" placeholder="Ingrese su nombre" value='{{$customer->name}}'>
        <small id="name" class="form-text text-muted">We'll never share your information with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="input_surname">Apellido</label>
        <input type="text" class="form-control" id="input_surname" name="input_surname" aria-describedby="surname" placeholder="Ingrese su apellido" value='{{$customer->surname}}'>
    </div>
    <div class="form-group">
      <label for="input_email">Email address</label>
      <input type="email" class="form-control" id="input_email" name="input_email" aria-describedby="emailHelp" placeholder="Ingrese su correo electronico" value='{{$customer->email}}'>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    {{-- <div class="form-group">
        <label for="select_state">Provincia</label>
        <select class="form-control" id="select_state">
          <option value='1'>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
    </div>
    <div class="form-group">
        <label for="select_city">Ciudad</label>
        <select class="form-control" id="select_city">
          <option value='1'>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
    </div> --}}

    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>

@endsection
