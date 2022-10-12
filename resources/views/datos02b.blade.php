<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
  <div>
    <table class="table">
      <thead class="table-dark">
      <tr>
        <th>No</th>
        <th>Carrera</th>
        <th>Grupo</th>
        <th>Matricula</th>
        <th>Alumno</th>
        <th>Genero</th>
        <th>Fecha Nacimiento</th>
        <th>Promedio</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $grup->i}}</td>
        <td>{{ $grup->carrera}}</td>
        <td>{{ $grup->grupo}}</td>
        <td>{{ $grup->matricula}}</td>
        <td>{{ $grup->alumno}}</td>
        <td>{{ $grup->genero}}</td>
        <td>{{ $grup->fecha_nacimiento}}</td>
        <td>{{ $grup->promedio}}</td>
      </tr>
    </tbody>
    </table>
  </div>
  <br><br>
  <div>
    <table class="table">
      <thead class="table-dark">
      <tr>
        <th>No</th>
        <th>Carrera</th>
        <th>Grupo</th>
        <th>Promedio</th>
        <th>N. Alumnos</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $grup->i}}</td>
        <td>{{ $grup->carrera}}</td>
        <td>{{ $grup->grupo}}</td>
        <td>{{ $grup->promedio_grupo}}</td>
        <td>#</td>
      </tr>
    </tbody>
  </table>
  </div>
</body>
</html>