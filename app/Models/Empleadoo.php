<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleadoo
 *
 * @property $id
 * @property $nombre
 * @property $apellidos
 * @property $email
 * @property $empresa
 * @property $area
 * @property $descripcion
 * @property $img
 * @property $fecha
 * @property $twiter
 * @property $facebook
 * @property $instagram
 * @property $linkedin
 * @property $valoracion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleadoo extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellidos','email','empresa','area','descripcion','img','fecha','twiter','facebook','instagram','linkedin','valoracion'];



}
