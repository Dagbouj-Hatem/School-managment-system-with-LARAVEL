<?php

namespace App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Classe
 * @package App
 * @version March 4, 2019, 10:57 am UTC
 *
 * @property string name
 * @property string description
 */
class Classe extends Model
{
    use SoftDeletes;

    public $table = 'classes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'description',
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
        'level_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'description' => 'required',
    ];

    public function level()
    {
        return $this->belongsTo('App\Level','level_id');
    }

    public function examens()
    {
        return $this->hasMany('App\Examen');
    }
}
