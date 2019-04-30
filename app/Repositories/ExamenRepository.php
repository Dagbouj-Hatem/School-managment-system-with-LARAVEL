<?php

namespace App\Repositories;

use App\Examen;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ExamenRepository
 * @package App\Repositories
 * @version March 21, 2019, 2:51 pm UTC
 *
 * @method Examen findWithoutFail($id, $columns = ['*'])
 * @method Examen find($id, $columns = ['*'])
 * @method Examen first($columns = ['*'])
*/
class ExamenRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'file',
        'matiere_id',
        'type_examen_id',
        'classe_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Examen::class;
    }
}
