<?php

namespace App\Repositories;

use App\User;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UserRepository
 * @package App\Repositories
 * @version February 26, 2019, 7:09 pm UTC
 *
 * @method User findWithoutFail($id, $columns = ['*'])
 * @method User find($id, $columns = ['*'])
 * @method User first($columns = ['*'])
*/
class UserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'first_name',
        'last_name',
        'date_of_birthday',
        'address1',
        'address2',
        'city',
        'zipcode',
        'avatar',
        'phone',
        'mobile',
        'email',
        'password',
        'type_account'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return User::class;
    }
}
