<?php

namespace App;

use App\Bookable;
use App\Booking;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function bookable()
    {
        return $this->belongsTo(Bookable::class);
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }
}
