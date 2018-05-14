<?php

namespace App\Repositories;

use App\Models\Hotel;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class HotelRepository
 * @package App\Repositories
 * @version May 13, 2018, 2:19 am UTC
 *
 * @method Hotel findWithoutFail($id, $columns = ['*'])
 * @method Hotel find($id, $columns = ['*'])
 * @method Hotel first($columns = ['*'])
*/
class HotelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'costo',
        'estrellas',
        'ubicacion',
        'ciudad',
        'imagen'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Hotel::class;
    }
}
