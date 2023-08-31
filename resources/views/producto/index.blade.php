@extends('layouts.app')

@section('content')
<div class="container">

    @if(Session::has('mensaje'))
    {{
        Session::get('mensaje')
    
    }}
    @endif
    <br>
    <h1>Lista de productos:</h1>
    <br>
    <div class="table-responsive ">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col" class="table-dark">ID</th>
                    <th scope="col" class="table-dark">Name</th>
                    <th scope="col" class="table-dark">Price</th>
                    <th scope="col" class="table-dark">Status</th>
                    <th scope="col" class="table-dark">Stock</th>
                    <th scope="col" class="table-dark"></th>
                    <th scope="col" class="table-dark"></th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach( $productos as $producto)
                <tr class="table-light">
                    <td>{{ $producto->id}}</td>
                    <td>{{ $producto->name}}</td>
                    <td>{{ $producto->price}}</td>
                    <td>{{ $producto->status}}</td>
                    <td>{{ $producto->stock}}</td>
                    <td>
                        <a href="{{ url('/producto/'.$producto->id.'/edit') }}">
                            <button class="btn btn-light">Editar</button>
                        </a> 

                        <form action="{{ url('/producto/'.$producto->id) }}" method="post" class="d-inline">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" onclick="return confirm('¿Borrar elemento?')"  value="Borrar" class="btn btn-dark">
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ url('/producto') }}">
            <button class="btn btn-secondary">Actualizar</button>
        </a>

        <a href="{{ url('/producto/create') }}">
            <button class="btn btn-secondary">Ingresar producto</button>
        </a>
    </div>

@endsection
</div>