<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * Class Solicitude
 *
 * @property $id
 * @property $nombreSolicitud
 * @property $fecha
 * @property $estado
 * @property $servicios_id
 * @property $clientes_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Factura[] $facturas
 * @property Servicio $servicio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Solicitude extends Model
{
    
    static $rules = [
		'nombreSolicitud' => 'required',
		'fecha' => 'required',
		'estado' => 'required',
		'servicios_id' => 'required',
		'clientes_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreSolicitud','fecha','estado','servicios_id','clientes_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'clientes_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facturas()
    {
        return $this->hasMany('App\Models\Factura', 'solicitud_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function servicio()
    {
        return $this->hasOne('App\Models\Servicio', 'id', 'servicios_id');
    }
    

}
