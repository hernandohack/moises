@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1>Productos</h1>
@stop

@section('content')
    <table class="table" id="productos">
        <thead>
            <tr>
                <th scope="col">Sku</th>
                <th scope="col">Producto</th>
                <th scope="col">List Price</th>
                <th scope="col">Activado</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $pro)
                <tr>
                    <td>{{ $pro->productcode }}</td>
                    <td>{{ $pro->product }}</td>
                    <td>{{ $pro->list_price }}</td>
                    <td>{{ $pro->forsale }}</td>
                    <td>
                        <a href="{{ route('productos.edit', $pro->productid) }}" class="btn btn-primary btn-sm">Editar</a>
                        <a class="btn btn-danger btn-sm" href="">Desactivar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop
@section('js')
    <script>
        $(document).ready(function() {
            $('#productos').DataTable({});
        });
    </script>
@stop
