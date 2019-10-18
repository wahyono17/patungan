<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionTemp extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
