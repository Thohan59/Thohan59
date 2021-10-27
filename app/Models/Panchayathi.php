<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panchayathi extends Model
{
    public function mandal()
    {
        return $this->belongsTo(Mandal::class);
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
