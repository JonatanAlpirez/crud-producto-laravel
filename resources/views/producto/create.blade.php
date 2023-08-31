@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <h1>Formulario de creación de un producto</h1>
    <br>
    <form action="{{ url('/producto') }}" method="post">
        @csrf
        @include('producto.form', ['modo'=> 'Crear'])

    </form>

    <a href="{{ url('producto/') }}">
            <button class="btn btn-secondary">Regresar</button>
    </a>

@endsection
</div>