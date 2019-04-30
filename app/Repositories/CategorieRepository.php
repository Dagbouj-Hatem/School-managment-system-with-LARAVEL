<?php

namespace App\Repositories;

use App\Categorie;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CategorieRepository
 * @package App\Repositories
 * @version March 1, 2019, 7:07 pm UTC
 *
 * @method Categorie findWithoutFail($id, $columns = ['*'])
 * @method Categorie find($id, $columns = ['*'])
 * @method Categorie first($columns = ['*'])
*/
class CategorieRepository extends BaseRepository
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
        return Categorie::class;
    }
}
