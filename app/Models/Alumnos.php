<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    use HasFactory;
    protected $table = 'alumnos';
    //protected $primaryKey = 'id';
    protected $fillable = [
            'id_carrera',
            'id_grupo',
            'nombre',
            'matricula',
            'fn',
            'genero',
            'promedio',
            'promedio_grupo'
            
    ];
}
