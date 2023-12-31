<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pvideo
 *
 * @property $id
 * @property $link
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pvideo extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['link'];



}
