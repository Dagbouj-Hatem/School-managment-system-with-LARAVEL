<?php

namespace App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SujetForum
 * @package App
 * @version March 10, 2019, 12:52 am UTC
 *
 * @property string name
 * @property string description
 * @property integer category_forums_id
 */
class SujetForum extends Model
{
    use SoftDeletes;

    public $table = 'sujet_forums';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id',
        'name',
        'description',
        'category_forums_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'category_forums_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'description' => 'required',
        'category_forums_id' => 'required'
    ];

     public function categorie()
    {
        return $this->belongsTo('App\CategoryForum','category_forums_id');
    }

     public function messages()
    {
        return $this->hasMany('App\MessageForum');
    }
    
}
