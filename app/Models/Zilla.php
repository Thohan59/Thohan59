<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zilla extends Model
{
    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function vibhag()
    {
        return $this->belongsTo(Vibhag::class);
    }

    public function addresses()
    {
        return $this->hasMany(Address::class)->with('user');
    }

    public function users()
    {
        return $this->hasManyThrough(User::class, Address::class)->with('address','uniform');
    }
}
