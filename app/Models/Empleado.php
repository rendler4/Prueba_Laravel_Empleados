<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id
 * @property $area_id
 * @property $nombre
 * @property $email
 * @property $sexo
 * @property $boletin
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Area $area
 * @property EmpleadoRol[] $empleadoRols
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
    
    static $rules = [
		'area_id' => 'required',
		'nombre' => 'required',
		'email' => 'required',
		'sexo' => 'required',
		'boletin' => 'required',
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['area_id','nombre','email','sexo','boletin','descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function area()
    {
        return $this->hasOne('App\Models\Area', 'id', 'area_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empleadoRols()
    {
        return $this->hasMany('App\Models\EmpleadoRol', 'empleado_id', 'id');
    }
    

}
