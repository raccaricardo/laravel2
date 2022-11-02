<div>
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
                        <x-producto-form />
                        <button type="submit" class="btn btn-primary mt-3">Crear Categoria</button>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal-content -->
    
</div>
