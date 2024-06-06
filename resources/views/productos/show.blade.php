<!-- resources/views/productos/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles del Producto</h1>
        <div>
            <strong>ID:</strong> {{ $producto->id }}
        </div>
        <div>
            <strong>Nombre:</strong> {{ $producto->nombre }}
        </div>
        <div>
            <strong>Descripción:</strong> {{ $producto->descripcion }}
        </div>
        <div>
            <strong>Precio:</strong> {{ $producto->precio }}
        </div>
        <div>
            <strong>Stock:</strong> {{ $producto->stock }}
        </div>
        <a href="{{ route('productos.index') }}" class="btn btn-primary mt-3">Volver a la lista</a>
    </div>
@endsection
