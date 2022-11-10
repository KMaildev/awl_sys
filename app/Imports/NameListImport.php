<?php

namespace App\Imports;

use App\Models\NameList;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;


class NameListImport implements ToCollection, WithHeadingRow
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
    public function collection(Collection $rows)
    {
        Validator::make($rows->toArray(), [
            '*.name' => 'required',
            '*.gender' => 'required',
        ])->validate();

        foreach ($rows as $row) {
            NameList::create([
                'no' => strval($row['no'] ?? ''),
                'gender' => strval($row['gender'] ?? ''),
                'name' => strval($row['name'] ?? ''),
                'date_of_birth' => strval($row['date_of_birth'] ?? ''),
                'father_name' => strval($row['father_name'] ?? ''),
                'qualification' => strval($row['qualification'] ?? ''),
                'nrc' => strval($row['nrc'] ?? ''),
                'medical_fail' => strval($row['medical'] ?? ''),
                'native_town' => strval($row['native_town'] ?? ''),
                'region' => strval($row['region'] ?? ''),
                'come_from_to_interview' => strval($row['come_from_to_interview'] ?? ''),
                'passport_issue_date' => strval($row['passport_issue_date'] ?? ''),
                'expiry_date' => strval($row['passport_expire_date'] ?? ''),
                'slip_date' => strval($row['passport_slip_date'] ?? ''),
                'passport_number' => strval($row['passport_number'] ?? ''),
                'phone_number' => strval($row['phone_number'] ?? ''),

                'remark' => strval($row['remark'] ?? ''),
                'fail_cancel' => strval($row['fail_or_cancel'] ?? ''),
                'physical_and_blindness_test' => strval($row['physical_and_blindness_test'] ?? ''),
                'covid_vaccine_first_dose' => strval($row['covid_vaccine_first_dose'] ?? ''),
                'covid_vaccine_second_dose' => strval($row['covid_vaccine_second_dose'] ?? ''),
                'age' => strval($row['age'] ?? ''),
                'departure_date' => strval($row['departure_date'] ?? ''),

                // 'mother_name' => strval($row['mother_name'] ?? ''),
                'note' => strval($row['note'] ?? ''),
                'contract_no' => strval($row['contract_no'] ?? ''),

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
}
