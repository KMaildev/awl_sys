<?php

namespace App\Exports;

use App\Models\NameList;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class NameListExport implements FromView
{
    public function __construct($name_lists)
    {
        $this->name_lists = $name_lists;
    }

    public function view(): View
    {
        return view('interview_name_list.export.name_list_export', [
            'name_lists' => $this->name_lists,
        ]);
    }
}
