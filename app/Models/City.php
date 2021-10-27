<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function revenueMandals()
    {
        return $this->hasMany(RevenueMandal::class);
    }

    public function zilla()
    {
        return $this->belongsTo(Zilla::class);
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
