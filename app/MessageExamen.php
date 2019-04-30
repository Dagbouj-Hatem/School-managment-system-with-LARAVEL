<?php

namespace App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Conner\Likeable\LikeableTrait;
/**
 * Class MessageExamen
 * @package App
 * @version March 21, 2019, 2:54 pm UTC
 *
 * @property string content
 * @property integer examen_id
 */
class MessageExamen extends Model
{
    use SoftDeletes;
    use LikeableTrait;
    
    public $table = 'message_examens';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'content',
        'user_id',
        'examen_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'content' => 'string',
        'examen_id' => 'integer',
        'user_id' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'content' => 'required'
    ];

     public function examen()
    {
        return $this->belongsTo('App\Examen','examen_id');
    }

     public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
