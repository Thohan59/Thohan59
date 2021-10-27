<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vibhag extends Model
{
    public function zillas()
    {
        return $this->hasMany(Zilla::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function users()
    {
        return $this->hasManyThrough(User::class, Address::class)->with('address','uniform');
    }
}
