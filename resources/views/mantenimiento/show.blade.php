@extends('layout.app')

@section('title','Mantenimiento')

{{-- Definimos el contenido --}}
@section('content') 
 <h1>Mantenimientos</h1>
 <h5>Listado de mantenimientos</h5>
 <hr>
  <!-- Imprimimos el nombre del producto -->

  <a class="btn btn-primary" href="/products/create">Agregar nuevo mantenimiento</a>
  <table class="table table-hover table-bordered mt-2">
    <tr>
      <td>Código</td>
      <td>id_activo</td>
      <td>Fecha_mantenimiento</td>
      <td>Costo</td>
      <td>Descripción</td>
      <td>id_usuario</td>
    </tr>

  </table>
@endsection

@section('scrips')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('js/product.js') }}"></script>
@endsection