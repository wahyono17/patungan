<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{   
    //allow all to fillable
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
