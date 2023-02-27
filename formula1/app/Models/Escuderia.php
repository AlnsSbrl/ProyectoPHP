<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Escuderia
 *
 * @property $id
 * @property $nombre_escuderia
 * @property $nacionalidad
 * @property $created_at
 * @property $updated_at
 *
 * @property Piloto[] $pilotos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Escuderia extends Model
{

    static $rules = [
		'nombre' => 'required',
		'nacionalidad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','nacionalidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pilotos()
    {
        return $this->hasMany('App\Models\Piloto', 'escuderia', 'id');
    }


}
