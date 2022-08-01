<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $ciudad_id
 * @property $nombre
 * @property $apellido
 * @property $direccion
 * @property $created_at
 * @property $updated_at
 *
 * @property Ciudad $ciudad
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'ciudad_id' => 'required',
		'nombre' => 'required',
		'apellido' => 'required',
		'direccion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ciudad_id','nombre','apellido','direccion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ciudad()
    {
        return $this->hasOne('App\Models\Ciudad', 'id', 'ciudad_id');
    }
    

}
