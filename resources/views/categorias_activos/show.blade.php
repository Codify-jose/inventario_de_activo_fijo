@extends('layout.app')

@section('title','Mantenimiento')

{{-- Definimos el contenido --}}
@section('content') 
 <h1>Categorias</h1>
 <h5>Listado de categorias</h5>
 <hr>
  <!-- Imprimimos el nombre del producto -->

  <a class="btn btn-primary" href="/products/create">Agrega una nueva categoria</a>
  <table class="table table-hover table-bordered mt-2">
    <tr>
      <td>Código</td>
      <td>Nombre</td>
      <td>Descripción</td>
    </tr>

  </table>
@endsection

@section('scrips')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('js/product.js') }}"></script>
@endsection