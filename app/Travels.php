<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Travels extends Model
{
    protected $fillable = [
      'country', 'city', 'content', 'description', 'startDate', 'endDate', 'price', 'maxNum',
    ];

    public function apply()
    {
        return $this->hasMany(Auth::user());
    }
}
