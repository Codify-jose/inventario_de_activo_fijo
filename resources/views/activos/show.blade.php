

@section('inicio','activos')

{{-- Definimos el contenido --}}
@section('content') 
 <h1>Activos</h1>
 <h5>Listado de activos</h5>
 <hr>
  <!-- Imprimimos el nombre del producto ///////    @foreach ($activos as $item)
 -->

  <a class="btn btn-danger btn-sm" href="/products/create">Agregar nuevo activo</a>
  <table class="table table-hover table-bordered mt-2">
    <tr>
      <td>Código</td>
      <td>Nombre</td>
      <td>Descripción</td>
      <td>Marcacodigo_inventario</td>
      <td>Fecha_adquisición</td>
      <td>Valor</td>
      <td>Depreciación</td>
      <td>id_categoria</td>
      <td>id_ubicación</td>
      <td>id_usuario</td>

    </tr>
    <tr>
      <td>jjbjb</td>
      <td>jbjb</td>
      <td>knjb</td>
      <td>lml</td>
      <td>
        <a class="btn btn-danger btn-sm" href="">Modificar</a>
        <button class="btn btn-danger btn-sm" url=""  token="">Eliminar</a>
      </td>
    </tr>
  </table>


