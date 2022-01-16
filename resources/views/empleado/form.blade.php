  @if(count($errors)>0)
    
    <div class="alert alert-danger" role="alert">
    <ul> @foreach($errors->all() as $error)
       <li> {{ $error }} </li>
    @endforeach
    </ul>
    </div>
       

  @endif
  <div class="mb-3 col-xs-3">
    <label for="User" class="form-label">User</label>
    <input type="text" name="User" class="form-control sm bg-light shadow-sm" value="{{ isset($empleado->User)?$empleado->User:old('User')}}">
  </div>

  <div class="mb-3">
    <label for="Status" class="form-label">Status</label>
    <input type="number" name="Status" class="form-control"  value="{{ isset($empleado->Status)?$empleado->Status:old('status')}}">
    <div id="status" class="form-text">El estado debe ser 1=ACTIVO o 2=INACTIVO</div>
    
 </div>


 <div class="mb-3 col-xs-3">
     <label for="Rol" class="form-label">Rol</label>
    <input type="text" name="Rol" class="form-control sm bg-light shadow-sm" value="{{ isset($empleado->Rol)?$empleado->Rol:old('Rol')}} ">
    
 </div> 
 

    <input type="submit"  class="btn btn-primary d-inline"value="{{$modo}} Datos">
    <a href="{{ url('empleado')}}" class="btn btn-secondary "> Volver </a> 
    
<br>
<br>
 