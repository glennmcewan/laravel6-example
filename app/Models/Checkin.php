<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function measure()
    {
        return $this->belongsTo(Measure::class);
    }

    public function servingStyle()
    {
        return $this->belongsTo(ServingStyle::class);
    }
}
