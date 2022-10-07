@extends('layouts.template')
@section('title', 'Descripcion de IVA')


@section('content')
    @if (!isset($iva))
        <div class="page-header mt-5">
            <h1>
                IVA NO ENCONTRADO
            </h1>
        </div>
    @else
        <div class="page-header mt-5">
            <h1>Detalles de IVA:</h1>
        </div>

        <form action="{{ url('/ivas/'.$iva->id) }}" id='form' method='post'>
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="input_name">Nombre</label>
                <input type="text" class="form-control" id="input_name" name="input_name" value="{{ $iva->name }}"
                    disabled aria-describedby="name" placeholder="Ingrese su nombre">
                <small id="name" class="form-text text-muted">We'll never share your information with anyone
                    else.</small>
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
