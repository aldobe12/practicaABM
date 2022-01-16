@extends('layouts.plantilla');
@section('contenido')
<br>
<h3>Editar datos del empleado</h3>
<form action="{{ url('/empleado/'.$empleado->id)}}" method="post">
@csrf
{{ method_field('PATCH')}}
@include('empleado.form',['modo'=>'Guardar'])

</form>
@endsection
