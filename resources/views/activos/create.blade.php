@extends('layout.app')

@section('title','Create')

{{-- Definimos el contenido --}}
@section('content') 
 <h1>Crear</h1>
 <h5>Formulario para crear activos</h5>
 <hr>

    <form action="" method="POST">
    @csrf
        
        <legend>Ingrese los datos</legend>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Nombre</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="">
            @error('nombre del activo') 
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span> 
            @enderror 
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Descripción</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="">
            @error('Descripción') 
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span> 
            @enderror 
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Codigo_inventario</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="">
                @error('Codigo_inventario') 
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span> 
            @enderror
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Fecha_adquisición</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="">

                @error('categoria') 
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span> 
            @enderror
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Valor</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="">
                @error('categoria') 
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span> 
            @enderror
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Depreciación</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="">
                @error('categoria') 
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span> 
            @enderror
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">id_categoria</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="">
                @error('categoria') 
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span> 
            @enderror
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">id_ubicación</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="">
                @error('categoria') 
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span> 
            @enderror
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">id_usuario</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="">
                @error('categoria') 
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span> 
            @enderror
        </div>
        <div class="mb-3">
            <div class="form-check">
            </div>
        </div>
        <div class="mb-3">
            <button type="button" class="btn btn-primary">Crear</button>
        </div>
    </form>
@endsection