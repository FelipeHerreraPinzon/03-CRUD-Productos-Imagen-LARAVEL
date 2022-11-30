@extends('layouts.header')
@section('title', 'CREAR')

@section('content')
    

<div class="card m-5">
    <div class="card-header">
        CREAR PRODUCTO
    </div>
    <div class="card-body">
<form method="POST" action="{{route('products.store')}}" enctype="multipart/form-data">
@csrf
    

<input class="form-control" type="text" name="nombre" placeholder="INGRESA NOMBRE" required>
<br>
<input class="form-control" type="number" name="precio" placeholder="INGRESA PRECIO" required>
<br>
<input type="file" name="imagen">
<br>
<input type="submit" class="btn btn-success mt-2" name="enviar" value="ENVIAR">


</form>
    </div>
    <div class="card-footer text-muted">
        <br>
    </div>
</div>

@endsection

@extends('layouts.footer')