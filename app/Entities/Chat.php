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
        return $this->belongsToMany('App\Entities\User')->using('App\Entities\ChatParticipants');
    }

    public function messages()
    {
        return $this->hasMany('App\Entities\Message');
    }
}
