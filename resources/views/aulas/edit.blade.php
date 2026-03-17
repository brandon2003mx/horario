@extends('plantillas.plantilla')
@section('titulo')
 EDICION
@endsection
@section('contenido')
EDITAR:
 <form action="{{route('aula.update',$aula->id)}}" method="POST">
 @method('put')
  <label for='nombre'>nombre</label>
  <input type='text' name='nombre' id='nombre' value="{{$aula->nombre}}"><br>
  <label for='capacidad'>capacidad</label>
  <input type='text' name='capacidad' id='capacidad' value="{{$aula->capacidad}}"><br> 
  <input type="submit" value="GUARDAR">
  @csrf
 </form> 
@endsection