<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bimsdato
 *
 * @property $id
 * @property $nombre
 * @property $red1
 * @property $red2
 * @property $red3
 * @property $red4
 * @property $telefono
 * @property $correo
 * @property $ubicacionlink
 * @property $ubicaciontext
 * @property $calendarlink
 * @property $mision
 * @property $vision
 * @property $valores
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Bimsdato extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','red1','red2','red3','red4','telefono','correo','ubicacionlink','ubicaciontext','calendarlink','mision','vision','valores'];



}
