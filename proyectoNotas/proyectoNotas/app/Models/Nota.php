<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Nota
 *
 * @property $id
 * @property $estudiante_id
 * @property $curso_id
 * @property $nota1
 * @property $nota2
 * @property $nota3
 * @property $nota4
 * @property $nota5
 * @property $notafinal
 * @property $created_at
 * @property $updated_at
 *
 * @property Curso $curso
 * @property Estudiante $estudiante
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Nota extends Model
{
    
    static $rules = [
		'estudiante_id' => 'required',
		'curso_id' => 'required',
		'nota1' => 'required',
		'nota2' => 'required',
		'nota3' => 'required',
		'nota4' => 'required',
		'nota5' => 'required',
		
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['estudiante_id','curso_id','nota1','nota2','nota3','nota4','nota5','notafinal'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function curso()
    {
        return $this->hasOne('App\Models\Curso', 'id', 'curso_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estudiante()
    {
        return $this->hasOne('App\Models\Estudiante', 'id', 'estudiante_id');
    }
    

}
