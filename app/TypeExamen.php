<?php

namespace App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TypeExamen
 * @package App
 * @version March 19, 2019, 5:55 pm UTC
 *
 * @property string name
 */
class TypeExamen extends Model
{
    use SoftDeletes;

    public $table = 'type_examens';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    public function examens()
    {
        return $this->hasMany('App\Examen');
    }
}
