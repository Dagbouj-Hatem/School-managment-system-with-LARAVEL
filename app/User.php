<?php

namespace App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Yadahan\AuthenticationLog\AuthenticationLogable;  
use Spatie\Permission\Traits\HasRoles;
/**
 * Class User
 * @package App
 * @version February 26, 2019, 7:09 pm UTC
 *
 * @property string first_name
 * @property string last_name
 * @property date date_of_birthday
 * @property string address1
 * @property string address2
 * @property string city
 * @property string zipcode
 * @property string avatar
 * @property string phone
 * @property string mobile
 * @property string email
 * @property string password
 * @property string type_account
 */
class User extends Authenticatable
{
    use Notifiable, SoftDeletes,HasRoles;

    public $table = 'users';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'first_name',
        'last_name',
        'date_of_birthday',
        'address1',
        'address2',
        'city',
        'zipcode',
        'avatar',
        'phone', 
        'email',
        'password',
        'type_account'
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'first_name' => 'string',
        'last_name' => 'string',
        'date_of_birthday' => 'date',
        'address1' => 'string',
        'address2' => 'string',
        'city' => 'string',
        'zipcode' => 'string',
        'avatar' => 'string',
        'phone' => 'string', 
        'email' => 'string',
        'password' => 'string',
        'type_account' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required',
        'type_account' => 'required'
    ];

    public function forum_messages()
    {
        return $this->hasMany('App\MessageForum');
    }

    public function examen_messages()
    {
        return $this->hasMany('App\MessageExamen');
    }    

    public function book_messages()
    {
        return $this->hasMany('App\MessageBook');
    }
    
}
