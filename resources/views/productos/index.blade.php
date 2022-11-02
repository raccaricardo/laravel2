@extends('layouts.template')
@section('title', 'Productos')
@section('content')


    <div class="container-fluid">

        <h1 class="h3 pt-5 fw-bold">
            Listado de Productos
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
        @if (Session::has('cat_created'))
            <div class="alert alert-sucess bg-success">
                {{ Session::get('cat_created') }}
            </div>
        @endif
        @if (Session::has('cat_edited'))
            <div class="alert alert-sucess bg-success">
                {{ Session::get('cat_edited') }}
            </div>
        @endif
        @if (Session::has('cat_deleted'))
            <div class="alert alert-sucess bg-success">
                {{ Session::get('cat_deleted') }}
            </div>
        @endif

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mt-3 mb-2" data-bs-toggle="modal" data-bs-target="#modalCrear">
            Agregar nuevo producto
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

                        <form action="{{ route('productos.store') }}" method='post'>
                            @csrf
                            <div class="form-group mt-1">
                                <label for="input_name">Nombre</label>
                                <input autofocus type="text" class="form-control @error('nombre')is-invalid @enderror"
                                    id="input_name" name="nombre" aria-describedby="name" placeholder="Nueva Categoria">
                                @error('nombre')
                                    <div id="validationServerNameFeedback" class="invalid-feedback">
                                        Verifique nuevamente el nombre
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mt-1">
                                <label for="input_altern_name">Nombre Alternativo</label>
                                <input autofocus type="text" id="input_altern_name" name="nombre"
                                    aria-describedby="name"
                                    class="form-control @error('nombre_alternativo')is-invalid @enderror"
                                    placeholder="Nombre alternativo">
                                @error('nombre_alternativo')
                                    <div id="validationServerNameFeedback" class="invalid-feedback">
                                        Este campo es incorrecto
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mt-1">
                                <label for="input_desc">Descripcion</label>
                                <input type="text" class="form-control @error('descripcion')is-invalid @enderror"
                                    id="input_desc" name="descripcion" aria-describedby="descripcion"
                                    placeholder="Descripcion">
                                @error('nombre_alternativo')
                                    <div id="validationServerNameFeedback" class="invalid-feedback">
                                        Este campo es incorrecto
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mt-1">
                                <label for="input_cost">Costo</label>
                                <input type="text" class="form-control @error('descripcion')is-invalid @enderror"
                                    id="input_cost" name="descripcion" aria-describedby="descripcion"
                                    placeholder="Descripcion">
                                @error('nombre_alternativo')
                                    <div id="validationServerNameFeedback" class="invalid-feedback">
                                        Este campo es incorrecto
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mt-1">
                                <label for="input_iva">IVA</label>
                                <input type="text" class="form-control @error('iva')is-invalid @enderror" id="input_iva"
                                    name="descripcion" aria-describedby="descripcion" placeholder="Descripcion">
                                @error('iva')
                                    <div id="validationServerNameFeedback" class="invalid-feedback">
                                        Este campo es incorrecto
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mt-1">
                                <label for="input_stock">Stock</label>
                                <input type="text" class="form-control @error('stock')is-invalid @enderror"
                                    id="input_stock" name="descripcion" aria-describedby="descripcion"
                                    placeholder="Descripcion">
                                @error('stock')
                                    <div id="validationServerNameFeedback" class="invalid-feedback">
                                        Este campo es incorrecto
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mt-1">
                                <label for="input_imagen">Imagen</label>
                                <input type="text" name="imagen"
                                    class="form-control @error('imagen') is-invalid @enderror" id="input_imagen"
                                    aria-describedby="inputGroupFileAddon" aria-label="Subir"
                                    placeholder="Temporalmente url de texto">
                                @error('imagen')
                                    <div id="validationServerImagenFeedback" class="invalid-feedback">
                                        Formato no valido(jpg, pgn, webp) o demasiado grande(debe ser menor a 5mb)
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mt-1">
                                <label for="input_imagen">Imagen</label>
                                <input type="text" name="imagen"
                                    class="form-control @error('imagen') is-invalid @enderror" id="input_imagen"
                                    aria-describedby="inputGroupFileAddon" aria-label="Subir"
                                    placeholder="Temporalmente url de texto">
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

        @livewire('productos.productos-index')

    </div>

@endsection
