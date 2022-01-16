@extends('layouts.plantilla');
@section('contenido')
<br>

@if(Session::has('mensaje'))
    {{Session::get('mensaje')}}
@endif
<br>
<br>
<a href="{{ url('empleado/create')}}" class="btn btn-success" class="d-inline"> Agregar nuevo empleado</a> <br><br>
<h3>Listado de empleados</h3>

<table class="table table table-bordered border-dark">
    <thead class="table-dark ">
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Status</th>
            <th>Rol</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($empleados as $empleado)
        <tr>
            <td>{{ $empleado->id }}</td>
            <td>{{ $empleado->user }}</td>
            <td>{{ ($empleado->status == 1) ? 'Activo' : 'Inactivo'}}</td>
            <td>{{ $empleado->rol }}</td>
            
            <td>
            <a href="{{ url('/empleado/'.$empleado->id.'/edit')}}" class="btn btn-primary">Editar</a>    
            
            <form action="{{ url('/empleado/'.$empleado->id)}}" method="post" class="d-inline">    
            @csrf   
            {{ method_field('DELETE')}}
            <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar" class="btn btn-danger">
            </form>
            </td>
        </tr>
       @endforeach
    </tbody>
</table>
@endsection