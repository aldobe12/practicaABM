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
    <input type="text" name="User" class="form-control sm bg-light shadow-sm" value="{{ isset($empleado->user)?$empleado->user:old('user')}}">
  </div>

  <div class="mb-3">
    <label for="Status" class="form-label">Status</label>
    <select name="Status" id="Status" class="form-select" aria-label="Default select example">
      <option value="0" {{isset($empleado->status)? 'selected' : ''}}>Seleccion estado</option>
      <option value="1" {{(isset($empleado->status) && $empleado->status == 1) ? 'selected' : ''}}>Activo</option>
      <option value="2" {{(isset($empleado->status) && $empleado->status == 2)  ? 'selected' : ''}}>Inactivo</option>

    </select>
  </div>

  <div class="mb-3 col-xs-3">
    <label for="Rol" class="form-label">Rol</label>
    <input type="text" name="Rol" class="form-control sm bg-light shadow-sm" value="{{ isset($empleado->rol)?$empleado->rol:old('rol')}} ">

  </div>


  <input type="submit" class="btn btn-primary d-inline" value="{{$modo}} Datos">
  <a href="{{ url('empleado')}}" class="btn btn-secondary "> Volver </a>

  <br>
  <br>