@extends('layouts.template')
@section('title', 'Listado categorias')
@section('content')


<div class="container-fluid">

    <h1 class="h3 pt-5 fw-bold">
        Listado de Categorias
    </h1>

    <!-- Manejo errores formulario -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ins>
            <h4>No se pudo crear categoria</h4>
        </ins>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>a
            @endforeach
        </ul>
    </div>
    @endif
    <!--Fin manejo de errores-->
    @if(Session::has('cat_created'))
    <div class="alert alert-sucess bg-success">
        {{Session::get('cat_created')}}
    </div>
    @endif
    @if(Session::has('cat_edited'))
    <div class="alert alert-sucess bg-success">
        {{Session::get('cat_edited')}}
    </div>
    @endif
    @if(Session::has('cat_deleted'))
    <div class="alert alert-sucess bg-success">
        {{Session::get('cat_deleted')}}
    </div>
    @endif

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mt-3 mb-2" data-bs-toggle="modal" data-bs-target="#modalCrear">
        Agregar nueva Categoria
    </button>

    <!-- Modal -->
    <div class="modal fade" id="modalCrear" tabindex="-1" aria-labelledby="modalAdd" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAdd">Agregar nueva Categoria</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Manejo errores formulario -->
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ins>
                            <h4>No se pudo crear categoria</h4>
                        </ins>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>a
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{route('categorias.store')}}" method='post'>
                        @csrf
                        <div class="form-group mt-1">
                            <label for="input_name">Nombre</label>
                            <input autofocus type="text" class="form-control" id="input_name" name="nombre" aria-describedby="name" placeholder="Nueva Categoria">
                            @error('nombre')
                            <div id="validationServerNameFeedback" class="invalid-feedback">
                                Verifique nuevamente el nombre
                            </div>
                            @enderror
                        </div>
                        <div class="form-group mt-1">
                            <label for="input_desc">Descripcion</label>
                            <input type="text" class="form-control" id="input_desc" name="descripcion" aria-describedby="descripcion" placeholder="Descripcion">
                        </div>

           
                        <div class="form-group mt-1">
                            <label for="input_imagen">Imagen</label>
                            <input type="text" name="imagen" class="form-control @error('imagen') is-invalid @enderror" id="input_file" aria-describedby="inputGroupFileAddon" aria-label="Subir" placeholder="Temporalmente url de texto">
                            @error('imagen')
                            <div id="validationServerImagenFeedback" class="invalid-feedback">
                                Formato no valido(jpg, pgn, webp) o demasiado grande(debe ser menor a 5mb)
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Crear Categoria</button>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
    
    <div class="table-responsive">

        <table class='table table-responsive table-dark table-striped captation-top'>
            <thead class='table-dark'>
                <tr>
                    <td scope='col'>ID</td>
                    <td>Nombre</td>
                    <td>Descripcion</td>
                    <td>Imagen</td>

                    <td></td>

                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $item)
                <tr>
                    <td scope='row'>{{ $item->id }} </td>
                    <td>{{ $item->nombre }} </td>
                    <td>{{ $item->descripcion }} </td>
                    <td>{{ $item->imagen }} </td>
                    <td>
                        <a href="{{route('categorias.show', ['id'=>$item->id])}}" class='btn btn-primary w-75 mb-1'>Editar</a>
                        <form action="{{ route('categorias.delete',['id'=> $item->id]) }}" method='post'>
                            @csrf
                            @method('DELETE')
                            <button type='submit' class='btn btn-danger w-75'>Borrar</a>
                        </form>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection