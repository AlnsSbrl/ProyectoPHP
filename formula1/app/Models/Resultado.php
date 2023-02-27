<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Resultado
 *
 * @property $id
 * @property $circuit_id
 * @property $numero_piloto
 * @property $posicion
 * @property $created_at
 * @property $updated_at
 *
 * @property Circuito $circuito
 * @property Piloto $piloto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Resultado extends Model
{

    static $rules = [
		'circuit_id' => 'required',
		'numero_piloto' => 'required',
		'posicion' => 'required',
    ];

    protected $perPage = 100;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['circuit_id','numero_piloto','posicion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function circuito()
    {
        return $this->hasOne('App\Models\Circuito', 'id', 'circuit_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function piloto()
    {
        return $this->hasOne('App\Models\Piloto', 'id', 'numero_piloto');
    }


}
