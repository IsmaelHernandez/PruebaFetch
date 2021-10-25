@extends('layouts.basetemplate');


@section('contenido')
    {{-- Boton para crear articulo --}}
    <a href="articulos/create" class="btn btn-primary">CREAR</a>
    {{-- Tabla --}}
    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th  scope="col">Codigo</th>
                <th  scope="col">Descripcion</th>
                <th  scope="col">Cantidad</th>
                <th  scope="col">Precio</th>
                <th  scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articulos as $articulo)
            <tr>
                <td>{{$articulo->id}}</td>
                <td>{{$articulo->codigo}}</td>
                <td>{{$articulo->descripcion}}</td>
                <td>{{$articulo->cantidad}}</td>
                <td>{{$articulo->precio}}</td>
                <td>
                    <a class="btn btn-info">Editar</a>
                    <button class="btn btn-danger">Borrar</button>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
@endsection