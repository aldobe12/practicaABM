@extends('layouts.plantilla');
@section('contenido')
<br>
<h3>Alta de Empleados</h3>

<form action="{{ url('/empleado')}}" method="post">
    
    @csrf
    @include('empleado.form',['modo'=>'Registrar'] )
</form>
@endsection




