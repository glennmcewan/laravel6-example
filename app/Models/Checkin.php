<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Checkin extends Model
{
    /**
     * User who created this Checkin.
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The Measure associated with this checkin.
     *
     * @return BelongsTo
     */
    public function measure(): BelongsTo
    {
        return $this->belongsTo(Measure::class);
    }

    /**
     * The Serving Style associated with this checkin.
     *
     * @return BelongsTo
     */
    public function servingStyle(): BelongsTo
    {
        return $this->belongsTo(ServingStyle::class);
    }
}
