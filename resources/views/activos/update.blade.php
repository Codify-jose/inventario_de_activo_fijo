@extends('layout.app')

@section('title','EditC')

{{-- Definimos el contenido --}}
@section('content') 
 <h1>Actualizar</h1>
 <h5>Formulario para actualizar activos</h5>
 <hr>

 <form>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Nombre</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Descripción</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Codigo_inventario</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Fecha_adquisición</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Valor</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Depreciación</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">id_categoria</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">id_ubicación</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">id_usuario</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="">
        </div>
        <div class="mb-3">
            <div class="form-check">
            </div>
        </div>
        <div class="mb-3">
            <button type="button" class="btn btn-primary">Actualizar</button>
            <button type="button" class="btn btn-primary">Cancelar</button>
        </div>
    </form>
@endsection