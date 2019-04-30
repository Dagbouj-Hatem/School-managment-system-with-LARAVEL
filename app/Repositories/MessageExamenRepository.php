<?php

namespace App\Repositories;

use App\MessageExamen;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MessageExamenRepository
 * @package App\Repositories
 * @version March 21, 2019, 2:54 pm UTC
 *
 * @method MessageExamen findWithoutFail($id, $columns = ['*'])
 * @method MessageExamen find($id, $columns = ['*'])
 * @method MessageExamen first($columns = ['*'])
*/
class MessageExamenRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'content',
        'examen_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return MessageExamen::class;
    }
}
