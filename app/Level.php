<?php

namespace App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Level
 * @package App
 * @version March 4, 2019, 10:48 am UTC
 *
 * @property string name
 * @property string description
 */
class Level extends Model
{
    use SoftDeletes;

    public $table = 'levels';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'description' => 'required'
    ];

     public function classes()
    {
        return $this->hasMany('App\Classe');
    }

    public function books()
    {
        return $this->hasMany('App\Book');
    }
}
