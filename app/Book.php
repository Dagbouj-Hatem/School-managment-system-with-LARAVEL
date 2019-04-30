<?php

namespace App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Book
 * @package App
 * @version March 1, 2019, 7:06 pm UTC
 *
 * @property string name
 * @property string description
 * @property string file
 * @property string photo
 */
class Book extends Model
{
    use SoftDeletes;

    public $table = 'books';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'description',
        'file',
        'photo',
        'categorie_id',
        'level_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'file' => 'string',
        'photo' => 'string',
        'categorie_id'=>'integer',
        'level_id'=>'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'description' => 'required',
        'file' => 'required',
        'photo' => 'required'
    ];

    public function categorie()
    {
        return $this->belongsTo('App\categorie','categorie_id');
    }
    public function level()
    {
        return $this->belongsTo('App\Level','level_id');
    }

     public function messages()
    {
        return $this->hasMany('App\MessageBook');
    }
}
