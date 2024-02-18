<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
     * The landing pages that belong to the package.
     */
    public function landingPages()
    {
        return $this->belongsToMany(LandingPage::class);
    }
}
