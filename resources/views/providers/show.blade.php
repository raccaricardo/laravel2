@extends('layouts.template')
@section('title', 'Descripcion de cliente')


@section('content')
    @if (!isset($item))
        <div class="page-header mt-5">
            <h1>
                PROVEEDOR NO ENCONTRADO
            </h1>
        </div>
    @else
        <div class="page-header mt-5">
            <h1>Detalles de cliente:</h1>
            <h2>{{ $item->name . ' ' . $item->surname }}</h2>
        </div>

        <form action="{{ url('/providers/' . $item->id) }}" id='form' method='post'>
            @csrf
            @method('PUT')
            <div class="form-group mt-5">
                <label for="input_name">Nombre</label>
                <input disabled value="{{$item->name}}" autofocus type="text" class="form-control" id="input_name"
                    name="input_name" aria-describedby="name" placeholder="Ingrese nombre">
            </div>
            <div class="form-group mt-2">
                <label for="input_business_name">Razon Social</label>
                <input disabled value="{{$item->business_name}}" type="text" class="form-control" id="input_business_name" name="input_business_name"
                    aria-describedby="surname" placeholder="Ingrese razon social">
            </div>
            <div class="form-group mt-2">
                <label for="input_address">Direccion</label>
                <input disabled value="{{$item->address}}" type="text" class="form-control" id="input_address" name="input_address"
                    aria-describedby="address" placeholder="Ingrese direccion">
            </div>
            <div class="form-group mt-2">
                <label for="input_phone">CP</label>
                <input disabled value="{{$item->cp}}" type="text" class="form-control" id="input_cp" name="input_cp" aria-describedby="phone"
                    placeholder="Ingrese codigo postal">
            </div>
            <div class="form-group mt-2">
                <div class="row">
                    <label for="input_city_id">Ciudad</label>
                    <select disabled name="input_city_id" id="input_city_id">
                        @if (isset($cities))
                        @foreach ($cities as $city)
                            @if($city->id == $item->cities->id)
                                <option value="{{$item->cities->id}} selected">{{$item->cities->name}}</option>
                            @else
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endif
                        @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div class="form-group mt-2">
                <div class="row">
                    <label for="input_ficalcondition_id">IVA</label>
                    <select disabled name="input_ficalcondition_id" id="input_ficalcondition_id">
                        
                        @if (isset($ivas))
                            @foreach ($ivas as $iva)
                            @if($iva->id == $item->fiscalCondition->id)
                                <option value="{{$item->fiscalCondition->id}} selected">{{$item->fiscalCondition->name}}</option>
                            @else
                                <option value="{{ $iva->id }}">{{ $iva->name }}</option>
                            @endif
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            @if (isset($editable))
            <div class="form-group mt-2">
                <label for="input_email">Email</label>
                <input disabled value="{{$item->email}}" type="email" class="form-control" id="input_email" name="input_email" aria-describedby="emailHelp"
                placeholder="Ingrese correo electronico">
            </div>
            <div class="form-group mt-2">
                <label for="input_website">Sitio web</label>
                <input disabled value="{{$item->website}}" type="url" class="form-control" id="input_website" name="input_website"
                placeholder="Ingrese sitio web del proveedor">
            </div>
            @endif


            @if (isset($editable))
                <button type='button' autofocus class="btn btn-secondary me-3 mt-3" id='btn-enable-form'
                    onClick='enableForm()'>Editar</button>
                <button type="submit" class="btn btn-primary ms-3 mt-3" disabled>Guardar</button>
            @endif

        </form>


    @endif

@section('scripts')
    <script>
        function enableForm() {

            let form_elements = document.querySelectorAll('[disabled]')

            console.log(form_elements);
            form_elements.forEach(e => e.removeAttribute('disabled'));

        }
    </script>

@endsection
@endsection
