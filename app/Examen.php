<?php

namespace App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Examen
 * @package App
 * @version March 21, 2019, 2:51 pm UTC
 *
 * @property string name
 * @property string description
 * @property string file
 * @property integer matiere_id
 * @property integer type_examen_id
 * @property integer classe_id
 */
class Examen extends Model
{
    use SoftDeletes;

    public $table = 'examens';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'description',
        'file',
        'matiere_id',
        'type_examen_id',
        'classe_id'
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
        'matiere_id' => 'integer',
        'type_examen_id' => 'integer',
        'classe_id' => 'integer'
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


     public function classe()
    {
        return $this->belongsTo('App\Classe','classe_id');
    } 

    public function matiere()
    {
        return $this->belongsTo('App\Matiere','matiere_id');
    } 

    public function typeExamen()
    {
        return $this->belongsTo('App\TypeExamen','type_examen_id');
    }

    public function messages()
    {
        return $this->hasMany('App\MessageExamen');
    }

}
