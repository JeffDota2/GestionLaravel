<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Educacione
 *
 * @property $id
 * @property $unidad_educativa
 * @property $fecha_inicio_unidad_educativa
 * @property $fecha_fin_unidad_educativa
 * @property $superior
 * @property $fecha_inicio_superior
 * @property $fecha_fin_superior
 * @property $cursos
 * @property $fecha_inicio_cursos
 * @property $fecha_fin_cursos
 * @property $talleres
 * @property $fecha_inicio_talleres
 * @property $fecha_fin_talleres
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Educacione extends Model
{
    
    static $rules = [
		'unidad_educativa' => 'required',
		'fecha_inicio_unidad_educativa' => 'required',
		'fecha_fin_unidad_educativa' => 'required',
		'superior' => 'required',
		'fecha_inicio_superior' => 'required',
		'fecha_fin_superior' => 'required',
		'cursos' => 'required',
		'fecha_inicio_cursos' => 'required',
		'fecha_fin_cursos' => 'required',
		'talleres' => 'required',
		'fecha_inicio_talleres' => 'required',
		'fecha_fin_talleres' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['unidad_educativa','fecha_inicio_unidad_educativa','fecha_fin_unidad_educativa','superior','fecha_inicio_superior','fecha_fin_superior','cursos','fecha_inicio_cursos','fecha_fin_cursos','talleres','fecha_inicio_talleres','fecha_fin_talleres'];



}
