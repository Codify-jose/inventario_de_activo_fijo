@extends('layouts.app')

@section('title', 'Productos')

@section('content')
<!-- encabezado -->
<div class="container">
    <div class="card">
        <div class="card-body">
        <center><h1>Usuarios</h1>
        <h5>Listado de usuarios</h5></center>
    </div>
</div>
      <br>
 {{-- Botón para ir al formulario de agregar usuario --}}
 <a class="btn btn-danger btn-sm" href="/usuarios/create">Agregar nuevo usuario</a>
 <a class="btn btn-success btn-sm" href="/usuarios/create">PDF</a>

 <table class="table table-hover table-bordered mt-2">
 <tr>
 <td>Código</td>
 <td>Nombre</td>
 <td>Email</td>
 <td>Telefono</td>
 <td>Acciones</td>
 </tr>
 {{-- Listado de productos --}}

 @foreach ($productos as $item) 
 <tr>
 <td>{{ $item->codigo }}</td>
 <td>{{ $item->nombre }}</td>
 <td>{{ $item->email }}</td>
 <td>{{ $item->telefono }}</td>
 <td>
<a class="btn btn-success btn-sm" href="/usuarios/update/{{$item->codigo}}">Modificar</a>

<button class="btn btn-danger btn-sm" url="/usuarios/destroy/{{$item->codigo}}" onclick="destroy(this)" token="{{ csrf_token() }}">Eliminar</button>


</td>

 </tr> 
 @endforeach
 </table>
@endsection
@section('scripts') 
 {{-- SweetAlert --}}
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 {{-- JS --}}
 <script src="{{ asset('js/product.js') }}"></script>
@endsection