@extends('layout.app')

@section('title', 'Inicio')

@section('content')
 <h1 class="text-center">Crear</h1>
 <h5 class="text-center">Formulario para crear usuarios</h5>
<hr>
 <div class="container">
 <form action="/products/store" method="POST">
 @csrf
 <div class="row">
<div class="col-6">
Nombre 
<input type="text" class="form-control" name="nombre">
@error('nombre') 
<span class="invalid-feedback d-block" role="alert">
<strong>{{$message}}</strong>
</span> 
@enderror 
</div>
<div class="col-6">
Email
<input type="text" class="form-control" name="email"> 
@error('email') 
<span class="invalid-feedback d-block" role="alert">
<strong>{{$message}}</strong>
</span> 
@enderror 
 </div>
 </div> 
 <div class="col-12">
Telefono
<select name="telefono" id="" class="form-control">
@foreach ($marcas as $item) 
<option value="{{$item->codigo}}">{{$item->nombre}}</option>
@endforeach 
</select>
@error('telefono') 
<span class="invalid-feedback d-block" role="alert">
<strong>{{$message}}</strong>
</span> 
@enderror
 </div>
 <div class="col-12 mt-2">
<button class="btn btn-primary">Guardar</button>
 </div>
 </form>
 </div>
 <br>
@endsection