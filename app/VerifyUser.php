<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerifyUser extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */

    protected $guarded = [];

    /**
     * Get the user that owns the verify user.
     * 
    */

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
