<?php

namespace App\Repositories;

use App\SujetForum;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SujetForumRepository
 * @package App\Repositories
 * @version March 10, 2019, 12:52 am UTC
 *
 * @method SujetForum findWithoutFail($id, $columns = ['*'])
 * @method SujetForum find($id, $columns = ['*'])
 * @method SujetForum first($columns = ['*'])
*/
class SujetForumRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'category_forums_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return SujetForum::class;
    }
}
