@extends('components.plantilla')
@section('title')
    PRODUCTOS
@endsection
@section('content')
    <h1 class="text-center mb-4">LISTA DE PRODUCTOS</h1>

    @session('success')
    <div class="alert alert-primary" role="alert">
        {{ session('success') }}
    </div>
    @endsession
    {{-- BootStrap tiene diferentes estilos de tablas, puedes revisarlas en su documentacion --}}
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Description</th>
                <th scope="col">Precio</th>
                <th scope="col">Category</th>
                <th scope="col">Marca</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $buscar)
                <tr>
                    <th scope="row">{{ $buscar->id }}</th>
                    <td>{{ $buscar->name }}</td>
                    <td>{{ $buscar->descripcion }}</td>
                    <td>{{ $buscar->price }}</td>
                    <td>{{ $buscar->category }}</td>
                    <td>{{ $buscar->marca }}</td>
                    <td>
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Acciones
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('productos.edit', $buscar->id) }}">Modificar</a>
                            </li>
                            <li>
                                <form action="{{ route('productos.destroy', $buscar->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Eliminar">
                                </form>
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
