@extends('layout.app')

@section('title','Activos')

{{-- Definimos el contenido --}}
@section('content') 
 <h1>Activos</h1>
 <h5>Listado de activos</h5>
 <hr>
  <!-- Imprimimos el nombre del producto -->

  <a class="btn btn-primary" href="/products/create">Agregar nuevo activo</a>
  <table class="table table-hover table-bordered mt-2">
    <tr>
      <td>Código</td>
      <td>Nombre</td>
      <td>Descripción</td>
      <td>Codigo_inventario</td>
      <td>Fecha_adquisición</td>
      <td>Valor</td>
      <td>Depreciación</td>
      <td>id_categoria</td>
      <td>id_ubicación</td>
      <td>id_usuario</td>

    </tr>

  </table>
@endsection

@section('scrips')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('js/product.js') }}"></script>
@endsection