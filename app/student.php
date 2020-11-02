<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table = 'student';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App/User');
    }
}
