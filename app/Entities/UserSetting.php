<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class UserSetting extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_settings';

    public function setting()
    {
        return $this->belongsTo('App\Entities\Setting', 'setting_id');
    }
}
