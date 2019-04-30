<?php

namespace App\Repositories;

use App\CategoryForum;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CategoryForumRepository
 * @package App\Repositories
 * @version March 10, 2019, 12:45 am UTC
 *
 * @method CategoryForum findWithoutFail($id, $columns = ['*'])
 * @method CategoryForum find($id, $columns = ['*'])
 * @method CategoryForum first($columns = ['*'])
*/
class CategoryForumRepository extends BaseRepository
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
        return CategoryForum::class;
    }
}
