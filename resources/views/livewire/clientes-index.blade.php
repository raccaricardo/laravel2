<div>


    <div class="row">
        <div class="col-6 mb-2">
            <input type="text" name="email" class="form-control" wire:model="q_email" placeholder="email" />
            <input type="text" name="apellido" class="form-control mt-1" wire:model="q_apellido"
                placeholder="apellido" />
            <select class="form-select" id="localidad" name="localidad" wire:model="q_localidad">
                @forelse( $localidades as $item)
                    <option value="{{$item->id}}">{{$item->nombre}}</option>
                @empty

                @endforelse
            </select>
        </div>
    </div>


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
                            <a class="btn btn-primary" href="{{ route('clientes.show', $cliente->id) }}">Abrir</a>
                        </td>
                        <td class="text-center">

                        </td>
                    </tr>
                    @empty
                @endforelse
            </tbody>
        </table>
        {{ $clientes->links() }}
    </div>
</div>
