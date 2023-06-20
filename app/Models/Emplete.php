<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Emplete
 *
 * @property $id
 * @property $nombre
 * @property $apellidos
 * @property $email
 * @property $telefono
 * @property $fechanacimento
 * @property $estudios
 * @property $area
 * @property $status
 * @property $cv
 * @property $mensaje
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Emplete extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellidos' => 'required',
		'email' => 'required',
		'telefono' => 'required',
		'fechanacimento' => 'required',
		'estudios' => 'required',
		'area' => 'required',
		'status' => 'required',
		'cv' => 'required',
		'mensaje' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellidos','email','telefono','fechanacimento','estudios','area','status','cv','mensaje'];



}
