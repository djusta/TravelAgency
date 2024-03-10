<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lead extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    /**
     * Get the status associated with the lead.
     */
    public function status()
    {
        return $this->belongsTo(LeadStatus::class, 'status_id');
    }
}
