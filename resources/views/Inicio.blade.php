@extends('components.plantilla')
@section('title')
Productos
@endsection
@section('content')
    <h1>INICIO DE SESSION</h1>
    
    <form action="{{ route('login')}}" method="POST">
        @csrf
        <label for="">
            Correo
            <input type="text" name="email" id="email" value="{{old('email')}}">
        </label>

        <br>
        <br>

        <label for="">
            Contraseña
            <input type="password" name="password" id="password">
        </label>
        <br>
        <br>
        <input type="submit" value="INGRESAR">
    </form>

@endsection