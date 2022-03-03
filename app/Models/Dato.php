<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dato
 *
 * @property $id
 * @property $primernombre
 * @property $segundonombre
 * @property $primerapellido
 * @property $segundoapellido
 * @property $cedula
 * @property $direccion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Dato extends Model
{
    
    static $rules = [
		'primernombre' => 'required',
		'segundonombre' => 'required',
		'primerapellido' => 'required',
		'segundoapellido' => 'required',
		'cedula' => 'required',
		'direccion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['primernombre','segundonombre','primerapellido','segundoapellido','cedula','direccion'];



}
