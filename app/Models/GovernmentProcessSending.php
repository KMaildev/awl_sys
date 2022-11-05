<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GovernmentProcessSending extends Model
{
    use HasFactory;

    public function overseas_agencie()
    {
        return $this->belongsTo(OverseasAgency::class, 'overseas_agencie_id', 'id');
    }

    public function demand_table()
    {
        return $this->belongsTo(Demand::class, 'demand_id', 'id');
    }
}
