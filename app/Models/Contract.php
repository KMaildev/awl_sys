<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    public function overseas_agencie()
    {
        return $this->belongsTo(OverseasAgency::class, 'overseas_agencie_id', 'id');
    }


    public function name_lists_table()
    {
        return $this->hasMany(NameList::class, 'contract_id', 'id');
    }
}
