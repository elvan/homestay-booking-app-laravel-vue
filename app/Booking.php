<?php

namespace App;

use App\Bookable;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function bookable()
    {
        return $this->belongsTo(Bookable::class);
    }
}
