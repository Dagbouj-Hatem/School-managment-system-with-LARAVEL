<?php

namespace App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Conner\Likeable\LikeableTrait;
/**
 * Class MessageBook
 * @package App
 * @version March 19, 2019, 2:30 pm UTC
 *
 * @property string content
 * @property integer user_id
 * @property integer book_id
 */
class MessageBook extends Model
{
    use SoftDeletes;
    use LikeableTrait;

    public $table = 'message_books';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'content',
        'user_id',
        'book_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'content' => 'string',
        'user_id' => 'integer',
        'book_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'content' => 'required'
    ];

     public function book()
    {
        return $this->belongsTo('App\Book','book_id');
    }
     public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    
}
