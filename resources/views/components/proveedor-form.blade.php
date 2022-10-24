<div>
    @csrf    
    <h2 class="h4 pt-2 fw-bold">{{$titulo}}</h2>
    <div class="form-group">
    <label for="input_nombre">Nombre</label>
        <input autofocus type="text" class="form-control @error('nombre') is-invalid @enderror" id="input_nombre" name="nombre" aria-describedby="name" placeholder="Ingrese su nombre" value="{{old('nombre', $proveedor->nombre)}}">
        <div id="validationServerUsernameFeedback" class="invalid-feedback">
            Ingrese el nombre del proveedor
        </div>
    </div>

    <label for="input_razon_social">Razon Social</label>
        <input autofocus type="text" class="form-control @error('razon_social') is-invalid @enderror" id="input_razon_social" name="razon_social" aria-describedby="razon_social" placeholder="Ingrese su nombre" value="{{old('razon_social', $proveedor->razon_social)}}">
        <div id="validationServerUsernameFeedback" class="invalid-feedback">
            Ingrese razon social del proveedor
        </div>
    </div>
    @if( !isset($proveedor->condicion_fiscal->id))
    <div class="form-group">
        <label for="input_condicion_fiscal">Condicion Fiscal</label>
        <select class="form-select @error('condicion_fiscal') is-invalid @enderror" name="condicion_fiscal" id="input_condicion_fiscal">
            <option value="">Seleccione una ciudad</option>
            @foreach ($ivas as $iva)
            <option value="{{ $iva->id }}" {{old('condicion_fiscal')}} > {{ $iva->nombre }}</option>
            @endforeach
        </select>

        <div id="validationServerUsernameFeedback" class="invalid-feedback">
            Seleccione condicion fiscal
        </div>
    </div>
    @else
    <div class="form-group">
        <label for="input_condicion_fiscal">Condicion Fiscal</label>
        <select class="form-select @error('condicion_fiscal') is-invalid @enderror" name="condicion_fiscal" id="input_condicion_fiscal">
            <option value="">Seleccione condicion fiscal</option>
            @foreach ($ivas as $iva)
            <option value="{{ $iva->id }}" {{old('condicion_fiscal', ($proveedor->condicion_fiscal->id) ? $proveedor->condicion_fiscal->id : '') == $localidad->id ? 'selected' : ''}} > {{ $localidad->nombre }}</option>
            @endforeach
        </select>

        <div id="validationServerUsernameFeedback" class="invalid-feedback">
            Seleccione la ciudad del proveedor
        </div>
    </div>
    @endif

    <label for="input_cuit">CUIT</label>
        <input autofocus type="text" class="form-control @error('cuit') is-invalid @enderror" id="input_cuit" name="cuit" aria-describedby="cuit" placeholder="CUIT" value="{{old('cuit', $proveedor->cuit)}}">
        <div id="validationServerUsernameFeedback" class="invalid-feedback">
            Ingrese cuit del proveedor
        </div>
    </div>
    @if( !isset($proveedor->localidades->id))
    <div class="form-group">
        <label for="input_localidad_id">Ciudad</label>
        <select class="form-select @error('localidad') is-invalid @enderror" name="localidad" id="input_localidad_id">
            <option value="">Seleccione una ciudad</option>
            @foreach ($localidades as $localidad)
            <option value="{{ $localidad->id }}" {{old('localidad')}} > {{ $localidad->nombre }}</option>
            @endforeach
        </select>

        <div id="validationServerUsernameFeedback" class="invalid-feedback">
            Seleccione la ciudad del proveedor
        </div>
    </div>
    @else
    <div class="form-group">
        <label for="input_localidad_id">Localidad</label>
        <select class="form-select @error('localidad') is-invalid @enderror" name="localidad" id="input_localidad_id">
            <option value="">Seleccione una localidad</option>
            @foreach ($localidades as $localidad)
            <option value="{{ $localidad->id }}" {{old('localidad', ($proveedor->localidades->id) ? $proveedor->localidades->id : '') == $localidad->id ? 'selected' : ''}} > {{ $localidad->nombre }}</option>
            @endforeach
        </select>

        <div id="validationServerUsernameFeedback" class="invalid-feedback">
            Seleccione la ciudad del proveedor
        </div>
    </div>
    @endif
    <label for="input_direccion">Direccion</label>
        <input autofocus type="text" class="form-control @error('direccion') is-invalid @enderror" id="input_direccion" name="direccion" aria-describedby="direccion" placeholder="direccion del proveedor" value="{{old('direccion', $proveedor->direccion)}}">
        <div id="validationServerUsernameFeedback" class="invalid-feedback">
            ingrese direccion
        </div>
    </div>
    <label for="input_email">Email</label>
        <input autofocus type="email" class="form-control @error('email') is-invalid @enderror" id="input_email" name="email" aria-describedby="email" placeholder="Ingrese email del proveedor" value="{{old('email', $proveedor->email)}}">
        <div id="validationServerUsernameFeedback" class="invalid-feedback">
            Ingrese email del proveedor
        </div>
    </div>
    <label for="input_sitio_web">Sitio Web</label>
        <input autofocus type="url" class="form-control @error('sitio_web') is-invalid @enderror" id="input_sitio_web" name="sitio_web" aria-describedby="sitio_web" placeholder="Ingrese sitio web" value="{{old('sitio_web', $proveedor->sitio_web)}}">
        <div id="validationServerUsernameFeedback" class="invalid-feedback">
            Ingrese el nombre del proveedor
        </div>
    </div>



</div>