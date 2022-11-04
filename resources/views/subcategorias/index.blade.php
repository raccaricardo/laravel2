@extends('layouts.template')
@section('title', 'Listado subcategorias')
@section('content')

    @if (Session::has('subcat_created'))
        <div class="alert alert-sucess bg-success">
            {{ Session::get('subcat_created') }}
        </div>
    @endif
    @if (Session::has('subcat_edited'))
        <div class="alert alert-sucess bg-success">
            {{ Session::get('subcat_edited') }}
        </div>
    @endif
    @if (Session::has('subcat_deleted'))
        <div class="alert alert-sucess bg-success">
            {{ Session::get('subcat_deleted') }}
        </div>
    @endif

    <div class="container-fluid">

        <h1 class="h3 pt-5 fw-bold">
            Listado de Subcategorias
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

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mt-3 mb-2" data-bs-toggle="modal" data-bs-target="#modalCrear">
            Agregar nueva subcategoria
        </button>

        <!-- Modal -->
        <div class="modal fade" id="modalCrear" tabindex="-1" aria-labelledby="modalAdd" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalAdd">Agregar nueva Subcategoria</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Manejo errores formulario -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ins>
                                    <h4>No se pudo crear la subcategoria</h4>
                                </ins>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>a
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('subcategorias.store') }}" enctype="multipart/form-data" method='post'>
                            @csrf
                            <div class="form-group mt-1">
                                <select name="categoria" id="select_categorias"
                                    class="form-select @error('categoria') is-invalid @enderror">
                                    @forelse ($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                    @empty
                                        <option value="">No se encontraron categorias</option>

                                    @endforelse
                                </select>
                                @error('categoria')
                                    <div id="validationServerNameFeedback" class="invalid-feedback">
                                        Seleccione una categoria
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mt-1">
                                <label for="input_name">Nombre</label>
                                <input type="text" class="form-control" id="input_name" name="nombre"
                                    aria-describedby="name" placeholder="Nombre de la subcategoria" value={{old('nombre')}} >
                                @error('nombre')
                                    <div id="validationServerNameFeedback" class="invalid-feedback">
                                        Verifique nuevamente el nombre
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mt-1">
                                <label for="input_desc">Descripcion</label>
                                <input type="text" class="form-control" id="input_desc" name="descripcion"
                                    aria-describedby="descripcion" placeholder="Descripcion" value={{old('descripcion')}} >
                            </div>
                            <div class="custom-file mt-1">
                            <label class="custom-file-label" for="input_imagen">Seleccionar Imagen</label>
                            <input type="file" value={{old('imagen')}} name="imagen" lang="es" class="custom-file-input @error('imagen') is-invalid @enderror" id="input_imagen" aria-describedby="inputGroupFileAddon" aria-label="Subir" placeholder="Temporalmente url de texto">
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
        <div class="table-responsive">

            <table class='table table-responsive table-dark table-striped captation-top'>
                <thead class='table-dark'>
                    <tr>
                        <td scope='col'>ID</td>
                        <td>Categoria</td>
                        <td>Nombre</td>
                        <td>Descripcion</td>
                        <td>Imagen</td>
                        <td></td>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($subcategorias as $item)
                        <tr>
                            <td scope='row'>{{ $item->id }} </td>
                            <td>{{ $item->categoria }} </td>
                            <td>{{ $item->nombre }} </td>
                            <td>{{ $item->descripcion }} </td>
                            <td> <img src="{{ $item->imagen }}" class="img-fluid" alt="" /></td>
                            <td>
                                <a href="{{ route('subcategorias.show', ['id' => $item->id]) }}"
                                    class='btn btn-primary w-75 mb-1'>Editar</a>
                                <form action="{{ route('subcategorias.delete', ['id' => $item->id]) }}" method='post'>
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
