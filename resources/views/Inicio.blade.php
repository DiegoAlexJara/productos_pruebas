@extends('components.plantilla')
@section('title')
Productos
@endsection
@section('content')

    <form action="">
        <label for="">
            <input type="text" name="email" id="email" value="{{old('email')}}">
        </label>
    </form>

@endsection