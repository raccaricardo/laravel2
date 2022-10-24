<div>
    @csrf

    <h2 class="h4 pt-2 fw-bold">
            {{$titulo}}
        </h2>
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
    @if( !isset($cliente->localidades->id))
    <div class="form-group">
        <label for="input_localidad_id">Localidad</label>
        <select class="form-select @error('localidad') is-invalid @enderror" name="localidad" id="input_localidad_id">
            <option value="">Seleccione una localidad</option>
            @foreach ($localidades as $localidad)
            <option value="{{ $localidad->id }}" {{old('localidad')}} > {{ $localidad->nombre }}</option>
            @endforeach
        </select>

        <div id="validationServerUsernameFeedback" class="invalid-feedback">
            Seleccione la ciudad del cliente
        </div>
    </div>
    @else
    <div class="form-group">
        <label for="input_localidad_id">Ciudad</label>
        <select class="form-select @error('localidad') is-invalid @enderror" name="localidad" id="input_localidad_id">
            <option value="">Seleccione una ciudad</option>
            @foreach ($localidades as $localidad)
            <option value="{{ $localidad->id }}" {{old('localidad', ($cliente->localidades->id) ? $cliente->localidades->id : '') == $localidad->id ? 'selected' : ''}} > {{ $localidad->nombre }}</option>
            @endforeach
        </select>

        <div id="validationServerUsernameFeedback" class="invalid-feedback">
            Seleccione la ciudad del cliente
        </div>
    </div>
    @endif
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="input_email" name="email" aria-describedby="emailHelp" placeholder="Ingrese su correo electronico" value="{{old( 'email', $cliente->email )}}">
        <div id="validationServerUsernameFeedback" class="invalid-feedback">
            Ingrese email del cliente
        </div>
    </div>

</div>