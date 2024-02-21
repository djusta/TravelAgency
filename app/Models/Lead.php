<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the status associated with the lead.
     */
    public function status()
    {
        return $this->belongsTo(LeadStatus::class, 'status_id');
    }
}
