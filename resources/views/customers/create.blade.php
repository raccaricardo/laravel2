@extends('layouts.template')
@section('title', 'Agregar cliente')
@section('content')

CREAR UN NUEVO

<form action="{{url('/customers')}}" method='post'>
    @csrf

    <div class="form-group">
        <label for="input_name">Nombre</label>
        <input autofocus type="text" class="form-control @error('input_name') is-invalid @enderror" id="input_name" name="input_name" aria-describedby="name" placeholder="Ingrese su nombre">
        <small id="name" class="form-text text-muted">We'll never share your information with anyone else.</small>
        @error('input_name')
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
            Please choose a username.
          </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="surname">Apellido</label>
        <input type="text" class="form-control" id="input_surname" name="input_surname" aria-describedby="surname" placeholder="Ingrese su apellido">
    </div>

    <div class="form-group">
      <div class="row">
        
            <label for="input_city_id">Ciudad</label>
            <input list='cities' id="input_city_id" name='input_city_id'>
                <datalist id="cities">
                @foreach ($cities as $city)
                    <option value="{{$city->name}}">
                @endforeach
                </datalist>
            </input>
        
        
          <button class="btn btn-primary pt-2">Agregar una nueva ciudad</button>
        
      </div>
    </div>
    <div class="form-group"
      <label for="ice-cream-choice">Choose a flavor:</label>
      <input list="ice-cream-flavors" id="ice-cream-choice" name="ice-cream-choice">

      <datalist id="ice-cream-flavors">
          <option value="Chocolate">
          <option value="Coconut">
          <option value="Mint">
          <option value="Strawberry">
          <option value="Vanilla">
      </datalist>

    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="input_email" name="input_email" aria-describedby="emailHelp" placeholder="Ingrese su correo electronico">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
