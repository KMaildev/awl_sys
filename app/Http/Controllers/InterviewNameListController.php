<?php

namespace App\Http\Controllers;

use App\Exports\NameListExport;
use App\Http\Requests\StoreNameList;
use App\Imports\NameListImport;
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
        $pre_interview_id = $request->pre_interview_id;
        $demand_id = $request->demand_id;
        $overseas_agencie_id = $request->overseas_agencie_id;

        Excel::import(new NameListImport($pre_interview_id, $demand_id, $overseas_agencie_id), request()->file('name_list_file'));
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
        $name_list->medical_fail = $request->medical_fail;
        $name_list->phone_number = $request->phone_number;
        $name_list->passport_number = $request->passport_number;
        $name_list->remark = $request->remark;
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
        $pre_interview = PreInterview::findOrFail($id);
        $name_lists = NameList::where('pre_interview_id', $id)->get();
        return view('interview_name_list.details', compact('pre_interview', 'name_lists'));
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function interviewNameListImport($id = null)
    {
        $name_lists = NameList::where('pre_interview_id', $id)->get();
        return Excel::download(new NameListExport($name_lists), 'interview_name_list_' . date("Y-m-d H:i:s") . '.xlsx');
    }
}
