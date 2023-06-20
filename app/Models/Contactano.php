<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contactano
 *
 * @property $id
 * @property $nombre
 * @property $apellidos
 * @property $email
 * @property $telefono
 * @property $empresa
 * @property $puesto
 * @property $mensaje
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contactano extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellidos' => 'required',
		'email' => 'required',
		'telefono' => 'required',
		'empresa' => 'required',
		'puesto' => 'required',
		'mensaje' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellidos','email','telefono','empresa','puesto','mensaje'];



}
