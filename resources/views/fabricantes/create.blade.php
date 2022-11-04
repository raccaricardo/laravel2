@extends('layouts.template')
@section('title', 'Guardar fabricantes')

@section('content')

<div class="container-fluid">
    <form action="{{route('fabricante.store')}}" class="form-control">
        <input type="text" name="nombre" class="form-controll" value="{{old('nombre')}}" />


    </form>

</div>



@endsection
