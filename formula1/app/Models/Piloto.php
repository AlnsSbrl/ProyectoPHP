<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Piloto
 *
 * @property $id
 * @property $nombre_completo
 * @property $nacionalidad
 * @property $escuderia
 * @property $created_at
 * @property $updated_at
 *
 * @property Escuderia $escuderia
 * @property Resultado[] $resultados
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Piloto extends Model
{

    static $rules = [
		'nombre_completo' => 'required',
		'nacionalidad' => 'required',
		'escuderia_id' => 'required',
    ];

    protected $perPage = 30;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_completo','nacionalidad','escuderia_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function escuderia()
    {
        return $this->hasOne('App\Models\Escuderia', 'id', 'escuderia_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function resultados()
    {
        return $this->hasMany('App\Models\Resultado', 'numero_piloto', 'id');
    }


}
