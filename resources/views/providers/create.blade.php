@extends('layouts.template')
@section('title', 'Agregar Proveedor')
@section('content')

    <h1 class='mt-5'>
        CREAR UN NUEVO PROVEEDOR
    </h1>

    <form action="{{ url('/providers') }}" method='post'>
        @csrf
        <div class="form-group mt-5">
            <label for="input_name">Nombre</label>
            <input autofocus type="text" class="form-control @error('input_name') is-invalid @enderror" id="input_name"
                name="input_name" aria-describedby="name" placeholder="Ingrese nombre">
            @error('input_name')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    Por favor escriba un nombre.
                </div>
            @enderror
        </div>
        <div class="form-group mt-2">
            <label for="input_business_name">Razon Social</label>
            <input type="text" class="form-control" id="input_business_name" name="input_business_name" aria-describedby="surname"
                placeholder="Ingrese razon social">
        </div>
        <div class="form-group mt-2">
            <label for="input_address">Direccion</label>
            <input type="text" class="form-control" id="input_address" name="input_address" aria-describedby="address"
                placeholder="Ingrese direccion">
        </div>
        <div class="form-group mt-2">
            <label for="input_phone">CP</label>
            <input type="text" class="form-control" id="input_cp" name="input_cp" aria-describedby="phone"
                placeholder="Ingrese codigo postal">
        </div>
        <div class="form-group mt-2">
            <div class="row">
                <label for="input_city_id">Ciudad</label>
                <select name="input_city_id" id="input_city_id">
                    <option value="">Seleccione una ciudad</option>
                    @if(isset($cities))
                        @foreach ($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    @endif
                </select>

            </div>
        </div>
        <div class="form-group mt-2">
            <div class="row">
                <label for="input_ficalcondition_id">IVA</label>
                <select name="input_ficalcondition_id" id="input_ficalcondition_id">
                    <option value="">Seleccione IVA</option>
                    @if(isset($ivas))
                        @foreach ($ivas as $iva)
                            <option value="{{ $iva->id }}">{{ $iva->name }}</option>
                        @endforeach
                    @endif
                </select>

            </div>
        </div>
        <div class="form-group mt-2">
            <label for="input_email">Email</label>
            <input type="email" class="form-control" id="input_email" name="input_email" aria-describedby="emailHelp"
                placeholder="Ingrese correo electronico">
        </div>
        <div class="form-group mt-2">
            <label for="input_website">Sitio web</label>
            <input type="url" class="form-control" id="input_website" name="input_website"
                placeholder="Ingrese sitio web del proveedor">
        </div>

        <button type="submit" class="btn btn-primary mt-2">Guardar nuevo Proveedor</button>
    </form>

@endsection
