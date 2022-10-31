<div>
    @csrf

    <h2 class="h4 pt-2 fw-bold">
            {{$titulo}}
    </h2>
    @if(Session::has('cliente_editado'))
        <div class="alert alert-sucess bg-success" role="alert">
            {{Session::get('cliente_editado')}}
        </div>
    @endif

    <div class="form-group">
        <label for="input_nombre">Nombre</label>
        <input autofocus type="text" class="form-control @error('nombre') is-invalid @enderror" id="input_nombre" name="nombre" aria-describedby="name" placeholder="Ingrese su nombre" value="{{old('nombre', $cliente->nombre)}}">
        <div id="validationServerUsernameFeedback" class="invalid-feedback">
            Ingrese el nombre del cliente
        </div>
    </div>
    <div class="form-group">
        <label for="surname">Apellido</label>
        <input type="text" class="form-control @error('apellido') is-invalid @enderror" id="input_apellido" name="apellido" aria-describedby="surname" placeholder="Ingrese su apellido" value="{{old('apellido', $cliente->apellido)}}">
        <div id="validationServerUsernameFeedback" class="invalid-feedback">
            Ingrese el apellido del cliente
        </div>
    </div>
    <div class="form-group">
        <label for="address">Direccion</label>
        <input type="text" class="form-control @error('Direccion') is-invalid @enderror" id="input_direccion" name="direccion" aria-describedby="address" placeholder="Ingrese su direccion" value="{{old('direccion', $cliente->direccion )}}">
        <div id="validationServerUsernameFeedback" class="invalid-feedback">
            Ingrese direccion del cliente
        </div>
    </div>
    <div class="form-group">
        <label for="phone">Telefono</label>
        <input type="text" class="form-control @error('telefono') is-invalid @enderror" id="input_telefono" name="telefono" aria-describedby="phone" placeholder="Ingrese su numero de telefono" value="{{old( 'telefono', $cliente->telefono )}}">
        <div id="validationServerUsernameFeedback" class="invalid-feedback">
            Ingrese numero de telefono del cliente
        </div>
    </div>
   <tr>
    
    <div class="form-group">
        <label for="localidad">Localidad</label>
        <select id="localidad" name="localidad" class="form-select" aria-describedby="localidadHelp">
            <option value="">Seleccione...</option>
            @foreach ($localidades as $item)
            <option value="{{$item->id}}" {{old('localidad', $cliente->localidades?->id) == $item->id ? 'selected' : ""}} >{{$item->nombre}}</option>
            @endforeach
        </select>
        <div id="localidad" class="invalid-feedback">
            Ingrese localidad del cliente
        </div>
    </div>
    
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="input_email" name="email" aria-describedby="emailHelp" placeholder="Ingrese su correo electronico" value="{{old( 'email', $cliente->email )}}">
        <div id="validationServerUsernameFeedback" class="invalid-feedback">
            Ingrese email del cliente
        </div>
    </div>

</div>
