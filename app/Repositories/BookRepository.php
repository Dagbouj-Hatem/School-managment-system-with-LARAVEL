<?php

namespace App\Repositories;

use App\Book;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BookRepository
 * @package App\Repositories
 * @version March 1, 2019, 7:06 pm UTC
 *
 * @method Book findWithoutFail($id, $columns = ['*'])
 * @method Book find($id, $columns = ['*'])
 * @method Book first($columns = ['*'])
*/
class BookRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'file',
        'photo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Book::class;
    }
}
