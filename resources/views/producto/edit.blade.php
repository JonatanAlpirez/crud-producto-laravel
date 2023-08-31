@extends('layouts.app')

@section('content')
<div class="container">

    <br/>
    <h1>Formulario de edición</h1>
    <br/>
    <form action="{{ url('/producto/'.$producto->id) }}" method="post">
        @csrf
        {{ method_field('PATCH') }}

        <label for="id" class="form-label">Id:  </label>
        <label for="idvalue">{{$producto->id}}</label>
        <br>
        @include('producto.form', ['modo'=> 'Editar'])

        
    </form>
    
    <a href="{{ url('producto/') }}">
            <button class="btn btn-secondary">Regresar</button>
    </a>
    


   

@endsection
</div>

