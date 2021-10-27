<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mandal extends Model
{
    public function panchayathis()
    {
        return $this->hasMany(Panchayathi::class);
    }

    public function revenue_mandal()
    {
        return $this->belongsTo(RevenueMandal::class);
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
