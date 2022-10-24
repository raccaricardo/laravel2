@extends('layouts.template')
@section('title', 'Agregar Proveedor')
@section('content')

    <h1 class='mt-5'>
        GUARDAR UN NUEVO PROVEEDOR
    <h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>

                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('proveedores.store') }}" method='post'>
        @csrf
        <div class="form-group mt-5">
            <label for="input_name">Nombre</label>
            <input value="{{old('nombre')}}" autofocus type="text" class="form-control @error('nombre') is-invalid @enderror" id="input_name"
                name="name" aria-describedby="name" placeholder="Ingrese nombre">
            @error('nombre')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    Por favor escriba un nombre.
                </div>
            @enderror
        </div>
        <div class="form-group mt-2">
            <label for="input_business_name">Razon Social</label>
            <input value="{{old('razon_social')}}" type="text" class="form-control @error('razon_social') is-invalid @enderror" id="input_business_name" name="razon_social"
                aria-describedby="surname" placeholder="Ingrese razon social">
            @error('razon_social')
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    Por favor ingrese razon_social
            </div
            @enderror
        </div>
        <div class="form-group mt-2">
            <label for="input_business_name">CUIT</label>
            <input value="{{old('input_business_name')}}" type="text" class="form-control" id="input_business_name" name="cuit"
                aria-describedby="surname" placeholder="CUIT del proveedor">
        </div>
        <div class="form-group mt-2">
            <label for="input_address">Direccion</label>
            <input type="text" class="form-control" id="input_address" name="direccion" aria-describedby="address"
                placeholder="Direccion">
        </div>
        <div class="form-group mt-2">
            <div class="row">
                <label for="input_city_id">Localidad</label>
                <select class="form_select" name="localidad" id="input_city_id">
                    <option value="">Seleccione una ciudad</option>
                    @if (isset($localidades))
                        @foreach ($localidades as $city)
                            <option value="{{ $city->id }}">{{ $city->nombre }}</option>
                        @endforeach
                    @endif
                </select>

            </div>
        </div>
        <div class="form-group mt-2">
            <div class="row">
                <label for="input_ficalcondition_id">IVA</label>
                <select class="form_select" name="condicion_fiscal" id="input_ficalcondition_id">
                    <option value="">Seleccione IVA</option>
                    @if (isset($ivas))
                        @foreach ($ivas as $iva)
                            <option value="{{ $iva->id }}">{{ $iva->nombre }}</option>
                        @endforeach
                    @endif
                </select>

            </div>
        </div>
        <div class="form-group mt-2">
            <label for="input_email">Email</label>
            <input type="email" class="form-control" id="input_email" name="email" aria-describedby="emailHelp"
                placeholder="Ingrese correo electronico">
        </div>
        <div class="form-group mt-2">
            <label for="input_website">Sitio web</label>
            <input type="text" class="form-control" id="input_website" name="sitio_web"
                placeholder="Ingrese sitio web del proveedor">
        </div>

        <button type="submit" class="btn btn-primary mt-2">Guardar nuevo Proveedor</button>
    </form>

@endsection
