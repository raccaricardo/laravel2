<div>


    <div class="row mt-2 mb-4">

        <input type="text" name="nombre" class="form-control w-25 my-1" wire:model.debounce.500ms="q_nombre"
            placeholder="nombre" />

        <input type="text" name="apellido" class="form-control w-25 my-1" wire:model.debounce.500ms="q_apellido"
            placeholder="apellido" />
        <input type="text" name="email" class="form-control w-25 my-1" wire:model.debounce.500ms="q_email"
            placeholder="email" />
        <select class="form-select w-25 my-1" id="localidad" name="localidad" wire:model.debounce.500ms="q_localidad">
            <option value="">Localidades</option>

            @forelse($localidades as $item)
                <option value="{{ $item->id }}">{{ $item->nombre }}</option>
            @empty
                <option value="">No se encontraron categorias creadas</option>
            @endforelse
        </select>
    </div>
        <!-- Cliente tabla -->
            <div class="table-responsive">
        <table class="table table-striped ">
            <caption>Listado de usuarios</caption>

            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Localidad</th>
                    <th scope="col" class="text-center">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($clientes as $cliente)
                    <tr>
                        <th scope="row">{{ $cliente->id }}</th>
                        <td>{{ $cliente->nombre }}</td>
                        <td>{{ $cliente->apellido }}</td>
                        <td>{{ $cliente->email }}</td>
                        <td>{{ $cliente->localidadNombre }}</td>

                        <td class="text-center">
                            <a class="btn btn-primary w-75" href="{{ route('clientes.show', $cliente->id) }}">Abrir</a>
                            <form action="{{ route('clientes.delete', $cliente->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger mt-1 w-75" type="submit">Borrar</button>
                            </form>

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="text-center">
                            No se encontraron clientes con esos datos
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{ $clientes->links() }}
    </div>
</div>
