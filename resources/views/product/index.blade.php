@extends('layouts.header')

@section('title', 'PRODUCTOS')



@section('content')

<a href="{{route('products.create')}}" class="btn btn-success mt-3">CREAR PRODUCTO</a>

<div class="table-responsive m-5">
    <table class="table table-primary table-striped" id="tabla_1">
        <thead class="table table-danger ">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">PRODUCTO</th>
                <th scope="col">PRECIO</th>
                <th scope="col">IMAGEN</th>
                <th scope="col">VER</th>
                <th scope="col">EDITAR</th>
                <th scope="col">BORRAR</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->nombre}}</td>
                <td>{{$product->precio}}</td>
                <td><img src="{{ asset('uploads/'.$product->imagen) }}" width="70px" height="70px" alt=""></td>
            <td><a href="{{route('products.show', $product)}}" class="btn btn-info">Ver</a></td> 
            <td><a href="{{route('products.edit', $product)}}" class="btn btn-warning">Editar</a></td>
            <td>
                <form action="{{route('products.destroy', $product)}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="eliminar" class="btn btn-danger">
                </form>
            </td>    
               
            </tr>
        @endforeach    
        </tbody>
    </table>
</div>

<script>

var myTable = document.querySelector("#tabla_1");
var dataTable = new DataTable(myTable);

</script>


@endsection


@extends('layouts.footer')