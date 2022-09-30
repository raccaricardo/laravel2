@extends('layouts.template')
@section('title', 'Index clientes')
@section('content')


<h1>Aqui va LISTADO scroll de CLIENTES </h1>
 <table class='table'>
    <thead>
        <tr>
            <td scope='col'>Id</td>
            {{-- <td scope='col'>City</td>
            <td scope='col'>State</td> --}}
            <td scope='col'>Name</td>
            <td scope='col'>Surname</td>
            <td scope='col'>Email</td>
            <td></td>
        </tr>
    </thead>
    <tbody>
        @foreach($customers AS $item)
        <tr>
            <td scope='row'>{{ $item->id}} </td>
                <td>{{ $item->name}} </td>
            <td>{{ $item->surname}} </td>
            <td>{{ $item->email}} </td>
            <td>
                <a href="/customers/{{ $item->id}}" class='btn btn-primary'>Editar</a>
                <a href="/customers/{{ $item->id}}" class='btn btn-danger'>Borrar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
 </table>



{{--
CREAR UN NUEVO

<form action="{{url('/customers')}}" method='post'>
    @csrf
    <div class="form-group">
        <label for="input_name">Nombre</label>
        <input type="text" class="form-control" id="input_name" aria-describedby="name" placeholder="Ingrese su nombre">
        <small id="name" class="form-text text-muted">We'll never share your information with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="surname">Apellido</label>
        <input type="text" class="form-control" id="name" aria-describedby="surname" placeholder="Ingrese su apellido">
    </div>
    <div class="form-group">
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
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="input_email" aria-describedby="emailHelp" placeholder="Ingrese su correo electronico">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form> --}}

@endsection
