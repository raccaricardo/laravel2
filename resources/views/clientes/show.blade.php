@extends('layouts.template')
@section('title', 'Descripcion de cliente')


@section('content')
    @if (!isset($customer))
        <div class="page-header mt-5">
            <h1>
                USUARIO NO ENCONTRADO
            </h1>
        </div>
    @else
        <div class="page-header mt-5">
            <h1>Detalles de cliente:</h1>
            <h2>{{ $customer->name . ' ' . $customer->surname }}</h2>
        </div>

        <form action="{{ url('/customers/' . $customer->id) }}" id='form' method='post'>
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="input_name">Nombre</label>
                <input type="text" class="form-control" id="input_name" name="input_name" value="{{ $customer->name }}"
                    disabled aria-describedby="name" placeholder="Ingrese su nombre">
                <small id="name" class="form-text text-muted">We'll never share your information with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="surname">Apellido</label>
                <input type="text" class="form-control" id="input_surname" name="input_surname"
                    value="{{ $customer->surname }}" disabled aria-describedby="surname" placeholder="Ingrese su apellido">
            </div>
            <div class="form-group">
                <label for="select_city_id">Ciudad</label>
                <select class="form-control" id="select_city_id" name='select_city_id' disabled>
                    <option value="0">Seleccione una ciudad</option>
                    @foreach ($cities as $city)
                        @if ($city->id == $customer->city_id)
                            {
                            <option value="{{ $city->id }}" selected="selected"> {{ $city->name }}</option>
                        }@else{
                            <option value="{{ $city->id }}"> {{ $city->name }}</option>
                            }
                        @endif
                    @endforeach

                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="input_email" name="input_email" disabled
                    value="{{ $customer->email }}" aria-describedby="emailHelp" placeholder="Ingrese su correo electronico">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <button type='button' autofocus class="btn btn-secondary me-3" id='btn-enable-form'
                onClick='enableForm()'>Editar</button>
            <button type="submit" class="btn btn-primary ms-3" disabled>Guardar</button>

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
