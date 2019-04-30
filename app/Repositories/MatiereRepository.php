<?php

namespace App\Repositories;

use App\Matiere;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MatiereRepository
 * @package App\Repositories
 * @version March 21, 2019, 2:41 pm UTC
 *
 * @method Matiere findWithoutFail($id, $columns = ['*'])
 * @method Matiere find($id, $columns = ['*'])
 * @method Matiere first($columns = ['*'])
*/
class MatiereRepository extends BaseRepository
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
        return Matiere::class;
    }
}
