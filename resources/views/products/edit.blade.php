@extends('components.plantilla')
@section('title')
Actualizar
@endsection
@section('content')
<h2>Editar Producto</h2  >
    <form action="{{ route('productos.update', $products->id) }}" method="POST">
        @csrf
        @method('PUT')
        <br>
        <label for="">
            Nombre
            <input type="text" name="name" id="name" value="{{$products->name}}">
        </label>
        
        <br>
        <br>
    
        <label for="">
            Descripcion
            <input type="text" name="descripcion" id="descripcion" value="{{$products->descripcion}}">
        </label>
        
        <br>
        <br>
    
        <label for="">
            Precio
            <input type="number" name="price" id="price" min="1" value="{{$products->price}}">
        </label>
    
        <br>
        <br>
    
        <label for="">
            Categoria
            <input type="text" name="category" id="category" value="{{$products->category}}">
        </label>
    
        <br>
        <br>
    
        <label for="">
            Marca
            <input type="text" name="marca" id="marca" value="{{$products->marca}}">
        </label>
    
        <br>
        <br>
    
        <input type="submit" value="Crear">
    
    </form>