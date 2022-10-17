<?php

namespace App\Http\Controllers;

use App\Exports\NameListExport;
use App\Models\Interview;
use App\Models\NameList;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class EmployerInterviewNameListController extends Controller
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
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function employerInterviewNameListDetails($id = null)
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

        return view('employer_interview_name_list.index', compact('pre_interview', 'name_lists', 'male_total', 'female_total'));
    }
}
