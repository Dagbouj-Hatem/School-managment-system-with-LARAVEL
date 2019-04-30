<?php

namespace App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CategoryForum
 * @package App
 * @version March 10, 2019, 12:45 am UTC
 *
 * @property string name
 * @property string description
 */
class CategoryForum extends Model
{
    use SoftDeletes;

    public $table = 'category_forums';
    

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

     public function sujets()
    {
        return $this->hasMany('App\SujetForum');
    }
}
