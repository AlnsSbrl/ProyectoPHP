<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Circuito
 *
 * @property $id
 * @property $nombre
 * @property $pais
 * @property $vueltas
 * @property $created_at
 * @property $updated_at
 *
 * @property Resultado[] $resultados
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Circuito extends Model
{

    static $rules = [
		'nombre' => 'required',
		'pais' => 'required',
		'vueltas' => 'required',
    ];

    protected $perPage = 30;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','pais','vueltas'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function resultados()
    {
        return $this->hasMany('App\Models\Resultado', 'circuit_id', 'id');
    }


}
