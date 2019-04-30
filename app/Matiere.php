<?php

namespace App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Matiere
 * @package App
 * @version March 21, 2019, 2:41 pm UTC
 *
 * @property string name
 */
class Matiere extends Model
{
    use SoftDeletes;

    public $table = 'matieres';
    

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
