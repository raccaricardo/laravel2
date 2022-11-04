@extends('layouts.template')
@section('title', 'Listado de fabricantes')

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
            Listado de Fabricantes
        </h1>

        <!-- Manejo errores formulario -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ins>
                    <h4>No se pudo crear Fabricante</h4>
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
            Agregar nuevo fabricante
        </button>

        <!-- Modal CREATE-->
        <div class="modal fade" id="modalCrear" tabindex="-1" aria-labelledby="modalAdd" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalAdd">Agregar nuevo fabricante</h5>
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

                        <form action="{{ route('fabricantes.store') }}" enctype="multipart/form-data" method='post'>
                            @csrf
                            <div class="form-group mt-1">
                                <label for="input_name">Nombre</label>
                                <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="input_name" name="nombre"
                                    aria-describedby="name" placeholder="Nombre de la subcategoria"
                                    value={{ old('nombre') }}>
                                @error('nombre')
                                    <div id="validationServerNameFeedback" class="invalid-feedback">
                                        Verifique nuevamente el nombre
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
        <!--End Modal CREATE-->
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
                    @forelse ($fabricantes as $item)
                        <tr>
                            <td scope='row'>{{ $item->id }} </td>
                            <td>{{ $item->nombre }} </td>
                            <td>
                                <!-- Modal Edit -->
                                <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="modalEdit"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalAdd">Editar</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('clientes.update', $fabricante->id) }}"
                                                    method='post'>
                                                    <input type="text" class="form-control"
                                                        placeholder="Nombre de fabricante"
                                                        value="{{ old('nombre', $fabricante->nombre) }}">
                                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                                </form>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cerrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal Edit-->
                                <form action="{{ route('fabricantes.delete', ['id' => $item->id]) }}" method='post'>
                                    @csrf
                                    @method('DELETE')
                                    <button type='submit' class='btn btn-danger w-75'>Borrar</a>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr><td>No se encontraron fabricantes</td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>

                    @endforelse
                </tbody>
            </table>
        </div>
    </div>




@endsection
