@extends('layouts.template')
@section('title', 'Index IVA')
@section('content')
   <form action="{{ url('/ivas') }}" method='post'>
        @csrf
        <div class="form-group">
            <label for="input_name">Nombre</label>
            <input autofocus type="text" class="form-control" id="input_name"
                name="input_name" aria-describedby="name" placeholder="Ingrese IVA">
            <small id="name" class="form-text text-muted">We'll never share your information with anyone else.</small>
            {{-- @error('input_name')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    Please choose a username.
                </div>
            @enderror --}}
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

@endsection
