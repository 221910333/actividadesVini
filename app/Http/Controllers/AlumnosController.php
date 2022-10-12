<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Grupos;
use App\Models\Carreras;
use App\Models\Alumnos;
use Illuminate\Support\Facades\DB;


class AlumnosController extends Controller
{
    //----------------Agregar usuario/nivel administrador------------------

    public function agregarAlumno(){
        $carreras = Carreras::all();
        return view("agregarAlumno")
            ->with(['carreras' => $carreras]);
    }
    public function datos2a(Request $request){
        $id_carrera = $request->get('id_carrera');
        $grupos = Grupos::where('id_carrera', $id_carrera)->get();
        return view("datos02a")
            ->with(['grupos' => $grupos]);
    }
    public function datos2b(Request $request){
        $id = $request->get('id_grupo');
        //console.log($id);
        $grup = DB::table('alumnos')
        ->join('grupos', 'alumnos.id_grupo', '=', 'grupos.id')
        ->join('carreras', 'alumnos.id_carrera', '=', 'carreras.id')
        ->select('carreras.nombre AS carrera', 'grupos.nombre AS grupo','alumnos.id AS i','alumnos.nombre AS alumno','alumnos.matricula AS matricula',
        'alumnos.fn AS fecha_nacimiento','alumnos.genero AS genero',
        'alumnos.promedio AS promedio', 'alumnos.promedio_grupo AS promedio_grupo')
         ->where('alumnos.id_grupo', '=', $id)
        ->first();
        return view("datos02b")
        ->with(['grup' => $grup]);
    }
    public function guardarAlumno(Request $request){
        $this->validate($request, [
            'id_carrera' => 'required',
            'id_grupo' => 'required',
            'nombre' => 'required',
            'matricula' => 'required',
            'fn' => 'required',
            'genero' => 'required',
            'promedio' => 'required',
        ]);

        $usu = Alumnos::create(array(
            'id_carrera'=>$request->input('id_carrera'),
            'id_grupo'=>$request->input('id_grupo'),
            'nombre'=>$request->input('nombre'),
            'matricula'=>$request->input('matricula'),
            'fn'=>$request->input('fn'),
            'genero'=>$request->input('genero'),
            'promedio'=>$request->input('promedio'),
            'promedio_grupo'=>$request->input('promedio_grupo')

        ));

        return redirect()->route('agregarAlumno');
    }
}
