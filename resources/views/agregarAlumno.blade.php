<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Examen</title>
    <script src="{{ asset('js/jquery-3.6.0.min.js')}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
  <h4>formulario de alumnos</h4>
    <div class="row g-3">
      <form class="col-auto" name="nuevo" action="{{ route('guardarAlumno') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

  @if(count($errors) > 0)
      @foreach($errors->all() as $error)
                 {{ $errors }} <br>
      @endforeach
  @endif

  <div>Seleccione La carerra</div>
  <div>
    <select class="form-select" name="id_carrera" id="carreras">
      <option  value="0">-----------------</option>
      @foreach($carreras as $car)
      <option value="{{ $car->id}}">{{$car->nombre}}</option>
      @endforeach
    </select>
  </div>
  <div>Seleccione el grupo</div>
  <div id="grupo">
    <select class="form-select" name="id_grupo" id="id_grupo">
      <option value="0">-------</option>
    </select>
  </div>
  <div>
    <label class="form-label">Nombre</label>
    <input class="form-control" type="text" name="nombre" value="{{ old('nombre') }}">
  </div>
  <div>
    <label class="form-label">Matricula</label>
    <input class="form-control" type="text" name="matricula" value="{{ old('matricula') }}">
  </div>
  <div>
    <label class="form-label">Fecha de Nacimiento</label>
    <input class="form-control" type="date" name="fn" value="">
  </div>
  <div>
    <label  class="form-label">Genero</label><br>
      Femenino <input  class="form-check-input" type="radio" name="genero" value="Femenino" checked>
      Masculino<input class="form-check-input" type="radio" name="genero" value="Masculino" ><br>
    </select>
  </div>
  <div>
    <label class="form-label">Promedio</label>
    <input class="form-control" type="text" name="promedio" value="{{old('promedio')}}">
  </div><br>
  <hr><hr><br>
  <div id="promedioGrupo">
    <label class="form-label">Promedio Grupo</label>
    <input class="form-control" type="text" name="promedio_grupo" value="{{old('promedio_grupo')}}">
  </div><br>
  <div class="text-center">
    <button type="submit" class="btn btn-primary" value="registrar">Registrar</button>
  </div>
  </form>
    </div>
  <hr>
  <div style="padding: 17rem" id="tablas">
    
  </div>
  <script type="text/javascript">
  $(document).ready(function(){
    $("#carreras").change(function(){
      var valcarrera = $("#carreras").val();
      if(valcarrera ==0){
        $("#tablas").empty();
        $("#grupo").empty();
        $("#grupo").html('<select name="id_grupo" id="id_grupo"><option value="0">-------</option></select>');

      }else{
        $("#grupo").empty();
        $("#grupo").load("{{ route('datos2a')}}?id_carrera=" + valcarrera).serialize();
      }
    });
  });
  </script>
</body>
</html>