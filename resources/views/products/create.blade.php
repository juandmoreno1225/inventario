@extends('layouts.app')

@section('content')
    <h1 class="title">Crear Nuevo Producto</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="field">
            <label class="label" for="name">Nombre</label>
            <div class="control">
                <input class="input" type="text" id="name" name="name" required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Descripción</label>
            <div class="control">
                <textarea class="textarea" id="description" name="description" required></textarea>
            </div>
        </div>

        <div class="field">
            <label class="label" for="price">Precio</label>
            <div class="control">
                <input class="input" type="number" step="0.01" id="price" name="price" required>
            </div>
        </div>

        <div class="field is-grouped">
            <div class="control">
                <button type="submit" class="button is-link">Crear Producto</button>
            </div>
            <div class="control">
                <a href="{{ route('products.index') }}" class="button is-link is-light">Cancelar</a>
            </div>
        </div>
    </form>
@endsection
