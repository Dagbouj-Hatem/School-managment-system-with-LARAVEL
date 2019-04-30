<?php

namespace App\Repositories;

use App\Classe;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ClasseRepository
 * @package App\Repositories
 * @version March 4, 2019, 10:57 am UTC
 *
 * @method Classe findWithoutFail($id, $columns = ['*'])
 * @method Classe find($id, $columns = ['*'])
 * @method Classe first($columns = ['*'])
*/
class ClasseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Classe::class;
    }
}
