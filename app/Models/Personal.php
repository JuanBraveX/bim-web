<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Personal
 *
 * @property $id
 * @property $nombre
 * @property $email
 * @property $empresa
 * @property $area
 * @property $descripcion
 * @property $img
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
class Personal extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','email','empresa','area','descripcion','img','twiter','facebook','instagram','linkedin','valoracion'];



}
