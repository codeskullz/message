<?php namespace NielsVanDenDries\Message\Models;

use Model;

/**
 * Model
 */
class Notifications extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nielsvandendries_message_notitications';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
