<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travels extends Model
{
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
