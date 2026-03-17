@extends('plantillas.plantilla')
@section('titulo')
 mostrar
@endsection
@section('contenido')
 mostrar el aula {{$aula->nombre}} con capacidad de {{$aula->capacidad}}
@endsection