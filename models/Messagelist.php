<?php namespace NielsVanDenDries\Message\Models;

use Model;
use \RainLab\User\Models\User;

/**
 * Model
 */
class Messagelist extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    protected $fillable = [
        // ...
        'is_read',
    ];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'nielsvandendries_message_list';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'sender' => [\RainLab\User\Models\User::class, 'key' => 'sender_id'],
        'recipient' => User::class,
    ];

    public function scopeSender($query, $user)
    {
        return $query->where('sender_id', $user->id);
    }

    public function createMessage($data)
{
    $user = Auth::getUser();

    $message = new Messagelist;
    $message->subject = $data['subject'];
    $message->body = $data['body'];
    $message->sender_id = $user->id;
    $message->recipient_id = $data['recipient_id'];
    $message->save();
}
}
