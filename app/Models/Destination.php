<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Destination extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'type', 'description', 'excerpt', 'parent_destination'];

    // Relationship for parent destination
    public function parentDestination()
    {
        return $this->belongsTo(Destination::class, 'parent_destination');
    }

    // Relationship for child destinations
    public function childDestinations()
    {
        return $this->hasMany(Destination::class, 'parent_destination');
    }

    // Relationship for packages
    public function packages()
    {
        return $this->belongsToMany(Package::class);
    }
    
}
