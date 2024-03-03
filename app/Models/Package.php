<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    /**
     * Get the destinations that owns the package.
     */
    public function destinations()
    {
        return $this->belongsToMany(Destination::class);
    }

    /**
     * Get the itineraries for the package.
     */
    public function itineraries(): HasMany
    {
        return $this->hasMany(Itinerary::class);
    }

    /**
     * The landing pages that belong to the package.
     */
    public function landingPages()
    {
        return $this->belongsToMany(LandingPage::class);
    }
}
