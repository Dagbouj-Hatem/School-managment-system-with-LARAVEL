<?php

namespace App\Repositories;

use App\Level;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class LevelRepository
 * @package App\Repositories
 * @version March 4, 2019, 10:48 am UTC
 *
 * @method Level findWithoutFail($id, $columns = ['*'])
 * @method Level find($id, $columns = ['*'])
 * @method Level first($columns = ['*'])
*/
class LevelRepository extends BaseRepository
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
        return Level::class;
    }
}
