<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Formacione
 *
 * @property $id
 * @property $empre
 * @property $fecha_ingreso
 * @property $fecha_fin
 * @property $cargo
 * @property $telf
 * @property $empresa
 * @property $fech_ingreso
 * @property $fech_fin
 * @property $carg
 * @property $telfono
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Formacione extends Model
{
    
    static $rules = [
		'empre' => 'required',
		'fecha_ingreso' => 'required',
		'fecha_fin' => 'required',
		'cargo' => 'required',
		'telf' => 'required',
		'empresa' => 'required',
		'fech_ingreso' => 'required',
		'fech_fin' => 'required',
		'carg' => 'required',
		'telfono' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['empre','fecha_ingreso','fecha_fin','cargo','telf','empresa','fech_ingreso','fech_fin','carg','telfono'];



}
