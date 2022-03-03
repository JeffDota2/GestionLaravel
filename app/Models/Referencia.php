<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Referencia
 *
 * @property $id
 * @property $name
 * @property $apell
 * @property $telef
 * @property $parents
 * @property $nombre
 * @property $apellido
 * @property $telefono
 * @property $parentesco
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Referencia extends Model
{
    
    static $rules = [
		'name' => 'required',
		'apell' => 'required',
		'telef' => 'required',
		'parents' => 'required',
		'nombre' => 'required',
		'apellido' => 'required',
		'telefono' => 'required',
		'parentesco' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','apell','telef','parents','nombre','apellido','telefono','parentesco'];



}
