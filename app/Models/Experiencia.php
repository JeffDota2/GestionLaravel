<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Experiencia
 *
 * @property $id
 * @property $nombre_empresa
 * @property $fecha_inicio_empresa
 * @property $fecha_fin_empresa
 * @property $telefono
 * @property $cargo
 * @property $nombre_empresa2
 * @property $echa_inicio_empresa2
 * @property $fecha_fin_empresa2
 * @property $telefono2
 * @property $cargo2
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Experiencia extends Model
{
    
    static $rules = [
		'nombre_empresa' => 'required',
		'fecha_inicio_empresa' => 'required',
		'fecha_fin_empresa' => 'required',
		'telefono' => 'required',
		'cargo' => 'required',
		'nombre_empresa2' => 'required',
		'echa_inicio_empresa2' => 'required',
		'fecha_fin_empresa2' => 'required',
		'telefono2' => 'required',
		'cargo2' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_empresa','fecha_inicio_empresa','fecha_fin_empresa','telefono','cargo','nombre_empresa2','echa_inicio_empresa2','fecha_fin_empresa2','telefono2','cargo2'];



}
