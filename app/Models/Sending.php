<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sending extends Model
{
    use HasFactory;

    public function overseas_agencie()
    {
        return $this->belongsTo(OverseasAgency::class, 'overseas_agencie_id', 'id');
    }

    public function contract_table()
    {
        return $this->belongsTo(Contract::class, 'contract_id', 'id');
    }
}
