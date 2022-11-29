@extends('layouts.header')
@section('title', 'PRODUCTO')

@section('content')

<a href="{{route('products.index')}}" class="btn btn-secondary"><h3>volver</h3></a>

<div class="card m-5">
    <div class="card-header">
        {{$product->nombre}}
    </div>
    <div class="card-body">
        {{$product->precio}}
        <br>
        <img src="{{ asset('uploads/'.$product->imagen) }}" width="300px" alt="">
    </div>
    <div class="card-footer text-muted">
        <br>
    </div>
</div>

@endsection

@extends('layouts.footer')