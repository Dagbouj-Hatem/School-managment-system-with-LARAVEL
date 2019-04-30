<?php

namespace App\Repositories;

use App\MessageBook;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MessageBookRepository
 * @package App\Repositories
 * @version March 19, 2019, 2:30 pm UTC
 *
 * @method MessageBook findWithoutFail($id, $columns = ['*'])
 * @method MessageBook find($id, $columns = ['*'])
 * @method MessageBook first($columns = ['*'])
*/
class MessageBookRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'content',
        'user_id',
        'book_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return MessageBook::class;
    }
}
