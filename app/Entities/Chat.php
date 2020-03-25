<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'chats';

    public function participants()
    {
        return $this->hasMany('App\Entities\ChatParticipant');
    }

    public function messages()
    {
        return $this->hasMany('App\Entities\Message');
    }
}
