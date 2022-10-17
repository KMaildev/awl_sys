<?php

namespace App\Http\Controllers;

use App\Exports\NameListExport;
use App\Http\Requests\StoreNameList;
use App\Imports\NameListImport;
use App\Models\EmployerInterview;
use App\Models\Interview;
use App\Models\NameList;
use App\Models\PreInterview;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class InterviewNameListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNameList $request)
    {
        $interview_id = $request->interview_id;
        $demand_id = $request->demand_id;
        $overseas_agencie_id = $request->overseas_agencie_id;
        $interview_type = $request->interview_type;

        Excel::import(new NameListImport($interview_id, $demand_id, $overseas_agencie_id, $interview_type), request()->file('name_list_file'));
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name_list = NameList::findOrFail($id);
        $name_list->name = $request->name;
        $name_list->gender = $request->gender;
        $name_list->nrc = $request->nrc;
        $name_list->father_name = $request->father_name;
        $name_list->mother_name = $request->mother_name;
        $name_list->qualification = $request->qualification;
        $name_list->date_of_birth = $request->date_of_birth;
        $name_list->native_town = $request->native_town;
        $name_list->region = $request->region;
        $name_list->come_from_to_interview = $request->come_from_to_interview;
        $name_list->expiry_date = $request->expiry_date;
        $name_list->slip_date = $request->slip_date;
        $name_list->passport_issue_date = $request->passport_issue_date;
        $name_list->medical_fail = $request->medical_fail ?? '';
        $name_list->phone_number = $request->phone_number;
        $name_list->passport_number = $request->passport_number;
        $name_list->remark = $request->remark ?? '';
        $name_list->fail_cancel = $request->fail_cancel ?? '';
        $name_list->bg_color = $request->background_color;
        $name_list->update();
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $passport = NameList::findOrFail($id);
        $passport->delete();
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function interviewNameListDetails($id = null)
    {
        $pre_interview = Interview::findOrFail($id);
        $name_lists = NameList::where('interview_id', $id)
            ->where('medical_fail', '')
            ->where('remark', '')
            ->where('fail_cancel', '')
            ->get();

        $male_total = NameList::where('interview_id', $id)
            ->where('gender', 'M')
            ->count();

        $female_total = NameList::where('interview_id', $id)
            ->where('gender', 'F')
            ->count();

        return view('interview_name_list.details', compact('pre_interview', 'name_lists', 'male_total', 'female_total'));
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function interviewNameListExport($id = null)
    {
        $name_lists = NameList::where('interview_id', $id)->get();
        return Excel::download(new NameListExport($name_lists), 'interview_name_list_' . date("Y-m-d H:i:s") . '.xlsx');
    }








    /**
     * @return \Illuminate\Support\Collection
     */
    public function allPreInterviewNameListExport($id = null)
    {
        $name_lists = NameList::where('demand_id', $id)->get();
        return Excel::download(new NameListExport($name_lists), 'interview_name_list_' . date("Y-m-d H:i:s") . '.xlsx');
    }






















    // /**
    //  * @return \Illuminate\Support\Collection
    //  */
    // public function employerInterviewNameListExport($id = null)
    // {
    //     $name_lists = NameList::where('employer_interview_id', $id)->get();
    //     return Excel::download(new NameListExport($name_lists), 'interview_name_list_' . date("Y-m-d H:i:s") . '.xlsx');
    // }



    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function employerInterviewNameListDetails($id = null)
    // {
    //     $employer_interview = EmployerInterview::findOrFail($id);

    //     $demand_id = $employer_interview->demand_id;
    //     $name_lists = NameList::where('demand_id', $demand_id)->get();

    //     $interview_name_lists = NameList::where('employer_interview_id', $id)->get();
    //     return view('interview_name_list.employer_interview.name_list_details', compact('employer_interview', 'name_lists', 'interview_name_lists'));
    // }


    // public function updateNameListEmployerInterview(Request $request)
    // {
    //     $employer_interview_id = $request->employer_interview_id;
    //     if ($request->nameList) {
    //         foreach ($request->nameList as $key => $value) {
    //             $id = $value['name_list_id'];
    //             $name_list = NameList::findOrFail($id);
    //             $name_list->employer_interview_id = $employer_interview_id;
    //             $name_list->update();
    //         }
    //         return redirect()->back()->with('success', 'Your processing has been completed.');
    //     }
    //     return redirect()->back()->with('error', 'Error.');
    // }
}
