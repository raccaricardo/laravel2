<div>
    <div class="row">
        <div class="col-6 mb-2">
            <input type="text" name="email" class="form-control" wire:model="q_email" placeholder="email" />
            <input type="text" name="apellido" class="form-control mt-1" wire:model="q_apellido"
                placeholder="apellido" />
            <div class="form-group mt-1">
                <select name="localidad" id="select_localidades"
                    class="form-select @error('localidad') is-invalid @enderror">
                        <option value="">ESTE SELECT ESTA FALLANDO</option>

                    @foreach ($localidades as $localidad)
                        <option value="{{ $localidad->id }}">{{ $localidad->nombre }}</option>
                    @endforeach
                </select>
                @error('localidad')
                    <div id="validationServerNameFeedback" class="invalid-feedback">
                        Seleccione una localidad
                    </div>
                @enderror
            </div>

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
                @foreach ($clientes as $cliente)
                    <tr>
                        <th scope="row">{{ $cliente->id }}</th>
                        <td>{{ $cliente->nombre }}</td>
                        <td>{{ $cliente->apellido }}</td>
                        <td>{{ $cliente->email }}</td>
                        <td>{{ $cliente->localidad }}</td>

                        <td class="text-center">
                            <a class="btn btn-primary" href="{{ route('clientes.show', $cliente->id) }}">Abrir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $clientes->links() }}
    </div>
</div>
