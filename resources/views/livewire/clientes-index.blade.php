<div>

    <input type="text" class="form-control mb-2" name="email" placeholder="Apellido" wire:model="busqueda">

    @if(Session::has('cliente_eliminado'))
        <div class="alert alert-sucess bg-success" role="alert">
            {{Session::get('cliente_eliminado')}}
        </div>
    @endif
    <div class="table-responsive mt-2">

        <table class='table table-responsive table-dark table-striped captation-top'>
            <caption>Listado de clientes</caption>
            <thead class='table-dark'>
                <tr>
                    <td scope='col'>id</td>
                    <td scope='col'>Nombre</td>
                    <td scope='col'>Apellido</td>
                    <td scope='col'>Email</td>
                    <td scope='col'>Localidad</td>
                    <td></td>

                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $item)
                <tr>
                    <td scope='row'>{{ $item->id }} </td>
                    <td>{{ $item->nombre }} </td>
                    <td>{{ $item->apellido }} </td>
                    <td>{{ $item->email }} </td>
                    <td></td>
                    <td>
                        <a href="/clientes/{{ $item->id }}" class='btn btn-primary w-100 mb-1'>Editar</a>
                        <form action="{{ url('/clientes/' . $item->id) }}" method='post'>
                            @csrf
                            @method('DELETE')
                            <button type='submit' class='btn btn-danger w-100'>Borrar</a>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>