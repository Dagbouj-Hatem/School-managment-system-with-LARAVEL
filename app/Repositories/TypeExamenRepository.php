<?php

namespace App\Repositories;

use App\TypeExamen;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TypeExamenRepository
 * @package App\Repositories
 * @version March 19, 2019, 5:55 pm UTC
 *
 * @method TypeExamen findWithoutFail($id, $columns = ['*'])
 * @method TypeExamen find($id, $columns = ['*'])
 * @method TypeExamen first($columns = ['*'])
*/
class TypeExamenRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TypeExamen::class;
    }
}
