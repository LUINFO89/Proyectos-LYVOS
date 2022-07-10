<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Factura
 *
 * @property $id
 * @property $fecha
 * @property $solicitud_id
 * @property $clientes_id
 * @property $identificacion
 * @property $nombresCliente
 * @property $apellidosCliente
 * @property $telefono
 * @property $direccion
 * @property $correo
 * @property $servicios_id
 * @property $detalleFactura
 * @property $cantidad
 * @property $precioServicio
 * @property $total
 * @property $observaciones
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Servicio $servicio
 * @property Solicitude $solicitude
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Factura extends Model
{
    
    static $rules = [
		'fecha' => 'required',
		'solicitud_id' => 'required',
		'clientes_id' => 'required',
		'identificacion' => 'required',
		'nombresCliente' => 'required',
		'apellidosCliente' => 'required',
		'telefono' => 'required',
		'direccion' => 'required',
		'correo' => 'required',
		'servicios_id' => 'required',
		'detalleFactura' => 'required',
		'cantidad' => 'required',
		'precioServicio' => 'required',
		'total' => 'required',
		'observaciones' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha','solicitud_id','clientes_id','identificacion','nombresCliente','apellidosCliente','telefono','direccion','correo','servicios_id','detalleFactura','cantidad','precioServicio','total','observaciones','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'clientes_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function servicio()
    {
        return $this->hasOne('App\Models\Servicio', 'id', 'servicios_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function solicitude()
    {
        return $this->hasOne('App\Models\Solicitude', 'id', 'solicitud_id');
    }
    

}
