<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingPage extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * The packages that belong to the landing page.
     */
    public function packages()
    {
        return $this->belongsToMany(Package::class);
    }
}
