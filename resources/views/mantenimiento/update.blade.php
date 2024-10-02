@extends('layout.app')

@section('title','Edit')

{{-- Definimos el contenido --}}
@section('content') 
 <h1>Actualizar</h1>
 <h5>Formulario para actualizar mantenimientos</h5>
 <hr>

 <form>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">id_activo</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Fecha de mantenimiento</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Costo</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Descripción</label>
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