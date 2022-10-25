<?php

namespace App\Imports;

use App\Models\NameList;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Validator;

class NameListImport implements ToModel,  WithHeadingRow
{
    public function __construct($interview_id, $demand_id, $overseas_agencie_id, $interview_type)
    {
        $this->interview_id = $interview_id;
        $this->demand_id = $demand_id;
        $this->overseas_agencie_id = $overseas_agencie_id;
        $this->interview_type = $interview_type;
    }

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new NameList([
            'no' => strval($row['no'] ?? ''),
            'name' => strval($row['name'] ?? ''),
            'gender' => strval($row['gender'] ?? ''),
            'nrc' => strval($row['nrc'] ?? ''),
            'father_name' => strval($row['father_name'] ?? ''),
            'mother_name' => strval($row['mother_name'] ?? ''),
            'qualification' => strval($row['qualification'] ?? ''),
            'date_of_birth' => strval($row['date_of_birth'] ?? ''),
            'native_town' => strval($row['native_town'] ?? ''),
            'region' => strval($row['region'] ?? ''),
            'come_from_to_interview' => strval($row['come_from_to_interview'] ?? ''),
            'expiry_date' => strval($row['expiry_date'] ?? ''),
            'slip_date' => strval($row['slip_date'] ?? ''),
            'passport_issue_date' => strval($row['passport_issue_date'] ?? ''),
            'phone_number' => strval($row['phone_number'] ?? ''),
            'passport_number' => strval($row['passport_number'] ?? ''),

            'medical_fail' => strval($row['medical_fail'] ?? ''),
            'fail_cancel' => strval($row['fail_or_cancel'] ?? ''),


            'remark' => strval($row['remark'] ?? ''),
            'note' => strval($row['note'] ?? ''),

            'interview_id' => $this->interview_id,
            'demand_id' => $this->demand_id,
            'overseas_agencie_id' => $this->overseas_agencie_id,
            'interview_type' => $this->interview_type,

            'join_date' => date('Y-m-d h:i:s'),
            'created_at'    => date('Y-m-d h:i:s'),
            'updated_at'    => date('Y-m-d h:i:s'),
        ]);
    }
}
