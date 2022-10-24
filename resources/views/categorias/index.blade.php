@extends('layouts.template')
@section('title', 'Listado categorias')
@section('content')


    <div class="container-fluid">

        <h1 class="h3 pt-5 fw-bold">
            Listado de Categorias
        </h1>



        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar nueva Categoria
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar nueva Categoria</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/categorias')}} method='post'>
                            @csrf
                            <div class="form-group">
                                <label for="input_name">Nombre</label>
                                <input autofocus type="text" class="form-control" id="input_name"
                                    name="nombre" aria-describedby="name" placeholder="Nueva Categoria">
                                {{-- @error('nombre')
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                        Verifique nuevamente el nombre
                                    </div>
                                @enderror --}}
                            </div>
                        <button type="submit" class="btn btn-primary">Crear Categoria</button>
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
                        <td>Nombre</td>
                        <td></td>
                        <td></td>

                    </tr>
                </thead>
                <tbody>
                    @isset($categorias)
                        @foreach ($categorias as $item)
                            <tr>
                                <td scope='row'>{{ $item->id }} </td>
                                <td>{{ $item->nombre }} </td>

                                <td>
                                    <a href="/categorias/{{ $item->id }}" class='btn btn-primary w-100 mb-1'>Editar</a>
                                    <form action="{{ url('/categorias/' . $item->id) }}" method='post'>
                                        @csrf
                                        @method('DELETE')
                                        <button type='submit' class='btn btn-danger w-100'>Borrar</a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endisset
                </tbody>
            </table>
        </div>
    </div>

@endsection
