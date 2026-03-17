@extends('plantillas.plantilla')
@section('titulo')
LISTADO DE AULAS
@endsection
@section('contenido')
 <table>
  <thead>
   <th>NOMBRE</th>
   <th>CAPACIDAD</th>
   <th>ACCIONES</th>
  </thead>
  <tbody>
@forelse($todos as $aula)
   <tr>
    <td>{{$aula->nombre}}</td>
    <td>{{$aula->capacidad}}</td>
    <td>
      <a href="{{route('aula.show',$aula->id )}}">MOSTRAR</a>,
      <a href="{{route('aula.edit',$aula->id )}}">EDITAR</a>,
       <form action="{{route('aula.delete',$aula->id )}}" method="POST">
       @method('DELETE')
       @csrf
       <input type="submit" value="BORRAR">
       </form>
       
        
    </td>
   </tr>
@empty
   <tr>
    <td colspan="3" >NO AHY AULAS</td>
   </tr>


@endforelse
  </tbody>
 </table>
<hr>
{{-- @dump($todos[0]) --}}
<a href="{{ route('aula.create') }}">agregar una aula</a>
@endsection