<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class)->with('uniform');
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function vibhag()
    {
        return $this->belongsTo(Vibhag::class);
    }

    public function zilla()
    {
        return $this->belongsTo(Zilla::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function revenue_mandal()
    {
        return $this->belongsTo(RevenueMandal::class);
    }

    public function mandal()
    {
        return $this->belongsTo(Mandal::class);
    }

    public function panchayathi()
    {
        return $this->belongsTo(Panchayathi::class);
    }
}
