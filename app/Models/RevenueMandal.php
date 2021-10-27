<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RevenueMandal extends Model
{
    public function mandals()
    {
        return $this->hasMany(Mandal::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
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
