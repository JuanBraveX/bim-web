<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Familia
 *
 * @property $id
 * @property $img
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Familia extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['img'];



}
