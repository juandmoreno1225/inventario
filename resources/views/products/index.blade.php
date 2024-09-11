@extends('layouts.app')

@section('content')
    <h1 class="title">Lista de Productos</h1>

    <div class="buttons">
        <a href="{{ route('products.create') }}" class="button is-primary">Crear Nuevo Producto</a>
    </div>

    @if(session('success'))
        <div class="notification is-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-container">
        <table class="table is-fullwidth is-striped is-hoverable">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ Str::limit($product->description, 50) }}</td>
                        <td>{{ number_format($product->price, 2) }}</td>
                        <td>
                            <div class="buttons are-small">
                                <a href="{{ route('products.edit', $product) }}" class="button is-warning">Editar</a>
                                <form action="{{ route('products.destroy', $product) }}" method="POST" class="is-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="button is-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este producto?')">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
