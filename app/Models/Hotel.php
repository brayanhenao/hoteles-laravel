<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Hotel
 * @package App\Models
 * @version May 13, 2018, 2:19 am UTC
 *
 * @property string nombre
 * @property integer costo
 * @property double estrellas
 * @property string ubicacion
 * @property string ciudad
 * @property string imagen
 */
class Hotel extends Model
{
    use SoftDeletes;

    public $table = 'hotels';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'costo',
        'estrellas',
        'ubicacion',
        'ciudad',
        'imagen'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'costo' => 'integer',
        'estrellas' => 'double',
        'ubicacion' => 'string',
        'ciudad' => 'string',
        'imagen' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function comentarios()
    {
        return $this->hasMany('App\Models\Comment');
    }


}
