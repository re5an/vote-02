<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    //
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function questions()
    {
        return $this->hasMany('App\Question');
    }
    public function group()
    {
        return $this->belongsToMany('App\Group')->withTimestamps();
    }
}
