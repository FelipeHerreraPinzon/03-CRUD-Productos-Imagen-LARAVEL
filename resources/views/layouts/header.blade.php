<!doctype html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>

<body>

    <ul class="nav justify-content-center  ">
            <li class="nav-item">
                <a class="nav-link btn btn-danger" href="{{route('welcome')}}" aria-current="page"><h3 class="text-white"><i class="fa-brands fa-laravel"></i> LARAVEL</h3></a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-success" href="{{route('products.create')}}" aria-current="page"><h3 class="text-white"><i class="fa-solid fa-square-plus"></i> CREAR PRODUCTO</h3></a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-info" href="{{route('products.index')}}" aria-current="page"><h3 class="text-white"><i class="fa-solid fa-list"></i> LISTA PRODUCTOS</h3></a>
            </li>
    </ul>

@yield('content') 
 









