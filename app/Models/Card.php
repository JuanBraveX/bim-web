<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Card
 *
 * @property $id
 * @property $titulo
 * @property $img
 * @property $descripcion
 * @property $link
 * @property $tipo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Card extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo','img','descripcion','link','tipo'];



}
