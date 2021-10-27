<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{

    public function vibhags()
    {
        return $this->hasMany(Vibhag::class);
    }

    public function users()
    {
        return $this->hasManyThrough(User::class, Address::class)->with('address','uniform');
    }

}
