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
    <select class="form-select" name="id_grupo" id="id_grupo">
        <option value="0">-----Seleccione un alumno------</option>
        @foreach($grupos as $grupo)
        <option value="{{$grupo->id}}">{{$grupo->nombre}}</option>
        @endforeach
        </select>
        <script type="text/javascript">
        $(document).ready(function(){
            $("#id_grupo").change(function(){
                var valgrupo = $("#id_grupo").val();
                if(valgrupo == 0){
                    $('#tablas').empty();
                }else{
                    $("#tablas").load("{{ route('datos2b')}}?id_grupo=" + valgrupo);
                    
                }
            });
        });

        </script>
</body>
</html>
