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

    public function destinations()
    {
        return $this->belongsToMany(Destination::class);
    }

    public function location()
    {
        return $this->BelongsToMany(Locations::class);
    }
}
