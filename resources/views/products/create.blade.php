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
            <input type="text" name="name" id="name" value="{{old('name')}}">
        </label>
        @error('name')
            <p>{{ $message }}</p>
        @enderror

        <br>
        <br>

        <label for="">
            Descripcion
            <input type="text" name="descripcion" id="descripcion" value="{{old('descripcion')}}">
        </label>
        @error('descripcion')
            <p>{{ $message }}</p>
        @enderror

        <br>
        <br>

        <label for="">
            Precio
            <input type="number" name="price" id="price" min="1" value="{{old('price')}}">
        </label>
        @error('price')
            <p>{{ $message }}</p>
        @enderror

        <br>
        <br>

        <label for="">
            Categoria
            <input type="text" name="category" id="category" value="{{old('category')}}">
        </label>
        @error('category')
            <p>{{ $message }}</p>
        @enderror

        <br>
        <br>

        <label for="">
            Marca
            <input type="text" name="marca" id="marca" value="{{old('marca')}}">
        </label>
        @error('marca')
            <p>{{ $message }}</p>
        @enderror

        <br>
        <br>

        <input type="submit" value="Crear">

    </form>
