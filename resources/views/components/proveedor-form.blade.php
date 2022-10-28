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
        
    <div class="form-group">
        <label for="input_condicion_fiscal">Condicion Fiscal</label>
        <select class="form-select @error('condicion_fiscal') is-invalid @enderror" name="condicion_fiscal" id="input_condicion_fiscal">
            <option value="">Seleccione condicion fiscal</option>
            @foreach ($ivas as $iva)
            <option value="{{ $iva->id }}" {{old('condicion_fiscal', $proveedor->condicion?->id) == $iva->id ? 'selected' : ''}} > {{ $iva->nombre }}</option>
            @endforeach
        </select>

        <div id="validationServerUsernameFeedback" class="invalid-feedback">
            Seleccione la condicion fiscal del proveedor
        </div>
    </div>

    <label for="input_cuit">CUIT</label>
        <input autofocus type="text" class="form-control @error('cuit') is-invalid @enderror" id="input_cuit" name="cuit" aria-describedby="cuit" placeholder="CUIT" value="{{old('cuit', $proveedor->cuit)}}">
        <div id="validationServerUsernameFeedback" class="invalid-feedback">
            Ingrese cuit del proveedor
        </div>
    </div>
    <div class="form-group">
        <label for="localidad">Localidad</label>
        <select id="localidad" name="localidad" class="form-select" aria-describedby="localidadHelp">
            <option value="">Seleccione...</option>
            @foreach ($localidades as $item)
            <option value="{{$item->id}}" {{old('localidad', $proveedor->localidades?->id) == $item->id ? 'selected' : ""}} >{{$item->nombre}}</option>
            @endforeach
        </select>
        <div id="localidad" class="invalid-feedback">
            Ingrese localidad del proveedor
        </div>
    </div>
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
        <input type="url" class="form-control @error('sitio_web') is-invalid @enderror" id="input_sitio_web" name="sitio_web" aria-describedby="sitio_web" placeholder="Ingrese sitio web" value="{{old('sitio_web', $proveedor->sitio_web)}}">
        <div id="validationServerSitioWebFeedback" class="invalid-feedback">
            Ingrese el nombre del proveedor
        </div>
    </div>



</div>