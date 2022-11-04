<div>
    <!--Buscador / Filtro -->
    <!-- <select model:wire="q_categoria" name="categoria" class="form-select" id="select_categorias">
        @forelse($categorias as $categoria)
        <option value="$categoria->id">{{ $categoria->nombre }}</option>
        @empty
        <option value="">No hay categorias creadas</option>
        @endforelse
    </select>
    <select select name="subcategoria" class="form-select" id="select_categorias">
        @forelse($subcategorias as $subcategoria)
        <option value="$subcategoria->id">{{ $subcategoria->nombre }}</option>
        @empty
        <option value="">No hay subcategorias creadas</option>
        @endforelse
    </select> -->
    <!--END Buscador / Filtro -->

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mt-3 mb-2" data-bs-toggle="modal" data-bs-target="#modalCrear">
        Agregar nuevo producto
    </button>


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
    @if (Session::has('cliente_created'))
        <div class="alert alert-sucess bg-success">
            {{ Session::get('cliente_created') }}
        </div>
    @endif
    @if (Session::has('cliente_edited'))
        <div class="alert alert-sucess bg-success">
            {{ Session::get('cliente_edited') }}
        </div>
    @endif
    @if (Session::has('cliente_deleted'))
        <div class="alert alert-sucess bg-success">
            {{ Session::get('cliente_deleted') }}
        </div>
    @endif
    <!-- Modal -->
    <div class="modal fade" id="modalCrear" tabindex="-1" aria-labelledby="modalAdd" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAdd">Agregar nuevo producto</h5>
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
                    <!-- post / create form-->
                    <form action="{{ route('productos.store') }}" method='post'>
                        @csrf
                        <select model:wire="q_categoria" name="categoria" class="form-select" id="select_categorias">
                                <option value="">Selecciona una categoria</option>

                            @forelse($categorias as $categoria)
                                <option value="$categoria->id">{{ $categoria->nombre }}</option>
                            @empty
                                <option value="">No hay categorias creadas</option>
                            @endforelse
                        </select>
                        <select select name="subcategoria" class="form-select" id="select_categorias">
                            @forelse($subcategorias as $subcategoria)
                                <option value="$subcategoria->id">{{ $subcategoria->nombre }}</option>
                            @empty
                                <option value="">No hay subcategorias creadas</option>

                            @endforelse
                        </select>
                        <div class="form-group mt-1">
                            <label for="input_name">Nombre</label>

                            <input autofocus type="text" class="form-control @error('nombre')is-invalid @enderror"
                                id="input_name" name="nombre" aria-describedby="nombre"
                                placeholder="Ej: Teclado hyperx" value="{{ old('nombre', $producto->nombre) }}">
                            @error('nombre')
                                <div id="validationServerNameFeedback" class="invalid-feedback">
                                    Verifique nuevamente el nombre
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mt-1">
                            <label for="input_altern_name">Nombre Alternativo</label>
                            <input autofocus type="text" id="input_altern_name" name="nombre_alternativo"
                                aria-describedby="name"
                                class="form-control @error('nombre_alternativo')is-invalid @enderror"
                                placeholder="Nombre alternativo"
                                value="{{ old('nombre_alternativo', $producto->nombre_alternativo) }}">
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
                                placeholder="Descripcion" value="{{ old('descripcion', $producto->descripcion) }}">
                            @error('descripcion')
                                <div id="validationServerNameFeedback" class="invalid-feedback">
                                    Este campo es incorrecto
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mt-1">
                            <label for="input_cost">Costo</label>
                            <input type="text" class="form-control @error('costo')is-invalid @enderror"
                                id="input_cost" name="costo" aria-describedby="costo" placeholder="Costo"
                                value="{{ old('costo', $producto->costo) }}">
                            @error('costo')
                                <div id="validationServerNameFeedback" class="invalid-feedback">
                                    Este campo es incorrecto
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mt-1">
                            <label for="input_iva">IVA</label>
 
                            <input type="text" class="form-control @error('iva')is-invalid @enderror" id="input_iva"
                                name="iva" aria-describedby="stock" placeholder="Ej: 10.5">
                            @error('iva')
                                <div id="validationServerNameFeedback" class="invalid-feedback">
                                    Este campo es incorrecto
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mt-1">
                            <label for="input_stock">Stock</label>
                            <input type="text" class="form-control @error('stock')is-invalid @enderror"
                                id="input_stock" name="stock" aria-describedby="stock" placeholder="Stock"
                                value="{{ old('stock', $producto->stock) }}">
                            @error('stock')
                                <div id="validationServerNameFeedback" class="invalid-feedback">
                                    Este campo es incorrecto
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mt-1">
                            <label for="input_imagen">Imagen</label>
                            <input type="file" name="imagen"
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
                    <!-- END post / create form-->

                     <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal-content -->
 
    <div class="table-responsive">
        <table class="table table-striped ">
            <caption>Listado de usuarios</caption>

            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Costo</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Imagen</th>
                    <th scope="col" class="text-center">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($productos as $producto)
                    <tr>
                        <th scope="row">{{ $producto->id }}</th>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->costo }}</td>
                        <td>{{ $producto->stock }}</td>
                        <td>{{ $producto->imagen }}</td>

                        <td class="text-center">
                            <a class="btn btn-primary" href="{{ route('productos.show', $producto->id) }}">Abrir</a>
                        </td>
                        <td class="text-center">

                        </td>
                    </tr>
                    @empty
                    <tr><td>No se encontraron productos</td></tr>
                @endforelse
            </tbody>
        </table>
        {{ $clientes->links() }}
    </div>
 

</div>
