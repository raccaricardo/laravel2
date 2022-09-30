
@extends('layouts.template')
@section('title', 'Descripcion de cliente')

@section('content')
    <div class="page-header">
        <h2>Detalles de cliente:</h1>
        <h2>{{$customer->name.' '.$customer->surname}}</h2>
    </div>
    <form action="{{url('/customers/'.$customer->id)}}" id='form' method='post'>
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="input_name">Nombre</label>
        <input type="text" class="form-control" id="input_name" name="input_name" value="{{$customer->name}}" disabled aria-describedby="name" placeholder="Ingrese su nombre">
        <small id="name" class="form-text text-muted">We'll never share your information with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="surname">Apellido</label>
        <input type="text" class="form-control" id="input_surname" name="input_surname" value="{{$customer->surname}}" disabled aria-describedby="surname" placeholder="Ingrese su apellido">
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
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="input_email" name="input_email" disabled value="{{$customer->email}}" aria-describedby="emailHelp" placeholder="Ingrese su correo electronico">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <button type='button' autofocus class="btn btn-secondary me-3" id='btn-enable-form' onClick='enableForm()'>Editar</button>
    <button type="submit" class="btn btn-primary ms-3" disabled>Guardar</button>

  </form>

@endsection
@section('scripts')
<script>
    function enableForm() {

        let form_elements =document.querySelectorAll('[disabled]')

        console.log(form_elements);
        form_elements.forEach(e=> e.removeAttribute('disabled'));

    }
</script>

@endsection
