<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NameList extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'nrc',
        'father_name',
        'mother_name',
        'qualification',
        'date_of_birth',
        'native_town',
        'region',
        'come_from_to_interview',
        'expiry_date',
        'slip_date',
        'passport_issue_date',
        'medical_fail',
        'phone_number',
        'passport_number',

        'remark',

        'pre_interview_id',
        'demand_id',
        'overseas_agencie_id',

        'bg_color',
        'join_date',
        'created_at',
        'updated_at',
    ];

    public function pre_interviews_table()
    {
        return $this->belongsTo(PreInterview::class, 'pre_interview_id', 'id');
    }
}
