<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Solicitude
 *
 * @property $id
 * @property $tipoIdentificacionSolicitud
 * @property $documentoIdentidadSolicitud
 * @property $nombresSolicitud
 * @property $primerApellidoSolicitud
 * @property $segundoApellidoSolicitud
 * @property $correoElectronicoSolicitud
 * @property $tipodeCertificacionSolicitus
 * @property $anoCertificacionSolicitud
 * @property $gradoSolicitud
 * @property $otrosSolicitud
 * @property $comentariosSolicitud
 * @property $descargarRecibo
 * @property $cargarRecibo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Solicitude extends Model
{
    
    static $rules = [
		'tipoIdentificacionSolicitud' => 'required',
		'documentoIdentidadSolicitud' => 'required',
		'nombresSolicitud' => 'required',
		'primerApellidoSolicitud' => 'required',
		'tipodeCertificacionSolicitus' => 'required',
		'anoCertificacionSolicitud' => 'required',
		'gradoSolicitud' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipoIdentificacionSolicitud','documentoIdentidadSolicitud','nombresSolicitud','primerApellidoSolicitud','segundoApellidoSolicitud','correoElectronicoSolicitud','tipodeCertificacionSolicitus','anoCertificacionSolicitud','gradoSolicitud','otrosSolicitud','comentariosSolicitud','descargarRecibo','cargarRecibo'];



}
