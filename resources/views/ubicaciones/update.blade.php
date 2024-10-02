@extends('layout.app')

@section('title','Edit')

{{-- Definimos el contenido --}}
@section('content') 
 <h1>Actualizar</h1>
 <h5>Formulario para actualizar ubicación</h5>
 <hr>

 <form>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">id</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Nombre</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Dirección</label>
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