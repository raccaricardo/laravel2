@extends('layouts.template')
@section('title', 'Editar Categoria')


@section('content')
<h1 class="h3 pt-5 fw-bold">
    <ins>Categoria {{$categoria->id}}: {{$categoria->nombre }}</ins>
</h1>

<h1></h1>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>a
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('categorias.update', ['id'=>$categoria->id]) }}" method='POST'>
    @method('PATCH')
    @csrf
    <div class="form-group mt-1">
        <label for="input_name">Nombre</label>
        <input autofocus type="text" class="form-control" id="input_name" name="nombre" aria-describedby="name" placeholder="Nueva Categoria" value="{{old('nombre', $categoria->nombre)}}">
        @error('nombre')
        <div id="validationServerNameFeedback" class="invalid-feedback">
            Verifique nuevamente el nombre
        </div>
        @enderror
    </div>
    <div class="form-group mt-1">
        <label for="input_desc">Descripcion</label>
        <input type="text" class="form-control" id="input_desc" name="descripcion" aria-describedby="descripcion" placeholder="Descripcion" value="{{old('descripcion', $categoria->descipcion)}}">
    </div>
    <div class="form-group mt-1">
        <label for="input_imagen">Imagen</label>
        <input type="text" name="imagen" class="form-control @error('imagen') is-invalid @enderror" id="input_file" aria-describedby="inputGroupFileAddon" aria-label="Subir" placeholder="Temporalmente url de texto" value="{{old('imagen', $categoria->imagen)}}">
        @error('imagen')
        <div id="validationServerImagenFeedback" class="invalid-feedback">
            Formato no valido(jpg, pgn, webp) o demasiado grande(debe ser menor a 5mb)
        </div>
        @enderror
    </div>

    <button type='button' autofocus class="btn btn-secondary me-3 mt-3" id='btn-enable-form' onClick='enableForm()'>Editar</button>
    <button type="submit" class="btn btn-primary ms-3 mt-3" disabled>Guardar</button>


</form>



@section('scripts')
<script>
    function enableForm() {

        let form_elements = document.querySelectorAll('[disabled]')
        form_elements.forEach(e => e.removeAttribute('disabled'));

    }
</script>

@endsection
@endsection