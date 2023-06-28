<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InfoPersonal
 *
 * @property $id
 * @property $direccion
 * @property $telefono
 * @property $fecha_nacimientp
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class InfoPersonal extends Model
{
    
    static $rules = [
		'direccion' => 'required',
		'telefono' => 'required',
		'fecha_nacimientp' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['direccion','telefono','fecha_nacimientp'];



}
