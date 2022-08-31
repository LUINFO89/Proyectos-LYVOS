<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Calificacione
 *
 * @property $id
 * @property $id_identidad_alumno
 * @property $alumno
 * @property $id_asignatura_estudiante
 * @property $materia
 * @property $nota1
 * @property $nota2
 * @property $nota3
 * @property $nota4
 * @property $nota_final
 * @property $id_curso_estudiante
 * @property $created_at
 * @property $updated_at
 *
 * @property Alumno $alumno
 * @property Asignatura $asignatura
 * @property Grado $grado
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Calificacione extends Model
{
    
    static $rules = [
		'id_identidad_alumno' => 'required',
		'alumno' => 'required',
		'id_asignatura_estudiante' => 'required',
		'materia' => 'required',
		'nota1' => 'required',
		'nota2' => 'required',
		'nota3' => 'required',
		'nota4' => 'required',
		'nota_final' => 'required',
		'id_curso_estudiante' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_identidad_alumno','alumno','id_asignatura_estudiante','materia','nota1','nota2','nota3','nota4','nota_final','id_curso_estudiante'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function alumno()
    {
        return $this->hasOne('App\Models\Alumno', 'id', 'id_identidad_alumno');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function asignatura()
    {
        return $this->hasOne('App\Models\Asignatura', 'id', 'id_asignatura_estudiante');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function grado()
    {
        return $this->hasOne('App\Models\Grado', 'id', 'id_curso_estudiante');
    }
    

}
