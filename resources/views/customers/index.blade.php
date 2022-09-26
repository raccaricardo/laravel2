@extends('layouts.template')
@section('title', 'Index clientes')
@section('content')


<h1>Aqui va LISTADO scroll de CLIENTES </h1>





CREAR UN NUEVO

<form>
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Ingrese su nombre">
        <small id="emailHelp" class="form-text text-muted">We'll never share your information with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="surname">Apellido</label>
        <input type="text" class="form-control" id="name" aria-describedby="surnameHelp" placeholder="Ingrese su apellido">
    </div>
    <div class="form-group">
        <label for="select_state">Provincia</label>
        <select class="form-control" id="select_state">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
    </div>
    <div class="form-group">
        <label for="select_city">Ciudad</label>
        <select class="form-control" id="select_city">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su correo electronico">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
