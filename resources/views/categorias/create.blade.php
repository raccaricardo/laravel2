@extends('layouts.template')
@section('title', 'Crear nueva categoria')
@section('content')
   <form action="{{ url('/categorias') }}" method='post'>
        @csrf
        <div class="form-group">
            <label for="input_name">Nombre</label>
            <input autofocus type="text" class="form-control" id="input_name"
                name="nombre" aria-describedby="name" placeholder="Nueva Categoria">
            {{-- @error('nombre')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    Verifique este campo
                </div>
            @enderror --}}
        </div>

        <button type="submit" class="btn btn-primary mt-5">Guardar</button>
    </form>

@endsection
