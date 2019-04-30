<?php

namespace App\Repositories;

use App\MessageForum;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MessageForumRepository
 * @package App\Repositories
 * @version March 10, 2019, 12:55 am UTC
 *
 * @method MessageForum findWithoutFail($id, $columns = ['*'])
 * @method MessageForum find($id, $columns = ['*'])
 * @method MessageForum first($columns = ['*'])
*/
class MessageForumRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'content',
        'sujet_forums_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return MessageForum::class;
    }
}
