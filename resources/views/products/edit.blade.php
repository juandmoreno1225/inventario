@extends('layouts.app')

@section('content')
    <h1 class="title">Editar Producto</h1>

    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="field">
            <label class="label" for="name">Nombre</label>
            <div class="control">
                <input class="input" type="text" id="name" name="name" value="{{ $product->name }}" required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Descripción</label>
            <div class="control">
                <textarea class="textarea" id="description" name="description" required>{{ $product->description }}</textarea>
            </div>
        </div>

        <div class="field">
            <label class="label" for="price">Precio</label>
            <div class="control">
                <input class="input" type="number" step="0.01" id="price" name="price" value="{{ $product->price }}" required>
            </div>
        </div>

        <div class="field is-grouped">
            <div class="control">
                <button type="submit" class="button is-link">Actualizar Producto</button>
            </div>
            <div class="control">
                <a href="{{ route('products.index') }}" class="button is-link is-light">Cancelar</a>
            </div>
        </div>
    </form>
@endsection
