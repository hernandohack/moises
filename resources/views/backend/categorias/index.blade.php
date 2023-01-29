@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')
    <h1>Categorias</h1>
@stop

@section('content')

<a href=""></a>
    <div class="container">
        <a href="{{route('categorias.create')}}" class="btn btn-primary btn-sm">Crear</a>
        <br>
        <br>
    <table class="table" id="categorias">
        <thead>
          <tr>
            <th scope="col">Categoria</th>
            <th scope="col">MetaDescripcion</th>
            <th scope="col">Activado</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $ca )
            <tr>
                <td>{{$ca->category}}</td>
                <td>
                    @if (count(explode(' ', $ca->meta_description)) > 5)
                        {{ implode(' ', array_slice(explode(' ', $ca->meta_description), 0, 8)) }}...
                    @else
                        {{ $ca->meta_description }}
                    @endif
                </td>
                <td>{{$ca->avail}}</td>
                <td>
                    <a href="{{route('categorias.edit', $ca->categoryid)}}" class="btn btn-primary btn-sm">Editar</a>
                    <a class="btn btn-danger btn-sm" href="">Activar</a>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>

    </div>
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('#categorias').DataTable({});
        });
    </script>
@stop
