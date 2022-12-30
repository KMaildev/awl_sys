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
        'age',
        'remark',
        'no',
        'fail_cancel',
        'interview_type',
        'interview_id',
        'demand_id',
        'overseas_agencie_id',
        'physical_and_blindness_test',
        'covid_vaccine_first_dose',
        'covid_vaccine_second_dose',
        'contract_no',
        'bg_color',
        'join_date',
        'created_at',
        'updated_at',
        'departure_date',
        'note',
    ];

    public function pre_interviews_table()
    {
        return $this->belongsTo(PreInterview::class, 'interview_id', 'id');
    }

    public function interviews_table()
    {
        return $this->belongsTo(Interview::class, 'interview_id', 'id');
    }


    public function contracts_table()
    {
        return $this->belongsTo(Contract::class, 'contract_id', 'id');
    }


    public function sendings_table()
    {
        return $this->belongsTo(Sending::class, 'sending_id', 'id');
    }
}
