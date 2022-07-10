<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $identificacion
 * @property $nombresCliente
 * @property $apellidosCliente
 * @property $telefono
 * @property $direccion
 * @property $correo
 * @property $genero
 * @property $servicios_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Factura[] $facturas
 * @property Servicio $servicio
 * @property Solicitude[] $solicitudes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'identificacion' => 'required',
		'nombresCliente' => 'required',
		'apellidosCliente' => 'required',
		'telefono' => 'required',
		'direccion' => 'required',
		'correo' => 'required',
		'genero' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['identificacion','nombresCliente','apellidosCliente','telefono','direccion','correo','genero','servicios_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facturas()
    {
        return $this->hasMany('App\Models\Factura', 'clientes_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function servicio()
    {
        return $this->hasOne('App\Models\Servicio', 'id', 'servicios_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function solicitudes()
    {
        return $this->hasMany('App\Models\Solicitude', 'clientes_id', 'id');
    }
    

}
