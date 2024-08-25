@extends('components.plantilla')
@section('title')
    Nuevo Producto
@endsection
@section('content')
    <h2>Nuevo Producto</h2>
    <form action="{{ route('productos.store') }}" method="POST">

        @session('success')
            <div class="alert alert-primary" role="alert">
                {{ session('success') }}
            </div>
        @endsession

        @csrf
        <br>
        <label for="">
            Nombre
            <input type="text" name="name" id="name">
        </label>

        <br>
        <br>

        <label for="">
            Descripcion
            <input type="text" name="descripcion" id="descripcion">
        </label>

        <br>
        <br>

        <label for="">
            Precio
            <input type="number" name="price" id="price" min="1">
        </label>

        <br>
        <br>

        <label for="">
            Categoria
            <input type="text" name="category" id="category">
        </label>

        <br>
        <br>

        <label for="">
            Marca
            <input type="text" name="marca" id="marca">
        </label>

        <br>
        <br>

        <input type="submit" value="Crear">

    </form>
