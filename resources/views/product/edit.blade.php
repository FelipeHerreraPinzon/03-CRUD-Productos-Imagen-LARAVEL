@extends('layouts.header')
@section('title', 'EDITAR')

@section('content')
<form method="POST" action="{{route('products.update', $product)}}" enctype="multipart/form-data">
@csrf
@method('put')    

<input class="form-control" type="text" name="nombre" value="{{$product->nombre}}">
<br>
<input class="form-control" type="number" name="precio" value="{{$product->precio}}">
<br>
 <input type="file" name="imagen">
 <img src="{{ asset('uploads/'.$product->imagen) }}" width="70px" height="70px" alt=""> 
 <br>
<input type="submit" name="enviar" value="ACTUALIZAR" class="btn btn-success">

</form>

@endsection

@extends('layouts.footer')