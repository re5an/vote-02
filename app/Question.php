<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function poll()
    {
        return $this->belongsTo('App\Poll');
    }
    public function choices()
    {
        return $this->hasMany('App\Choices');
    }
}
