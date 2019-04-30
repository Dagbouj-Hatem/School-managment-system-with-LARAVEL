<?php

namespace App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Conner\Likeable\LikeableTrait;
/**
 * Class MessageForum
 * @package App
 * @version March 10, 2019, 12:55 am UTC
 *
 * @property string content
 * @property integer sujet_forums_id
 */
class MessageForum extends Model
{
    use SoftDeletes,LikeableTrait;

    public $table = 'message_forums';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'content',
        'sujet_forum_id',
        'user_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'content' => 'string',
        'sujet_forum_id' => 'integer',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'content' => 'required'
    ];

     public function sujet()
    {
        return $this->belongsTo('App\SujetForum','sujet_forum_id');
    }
     public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
