<?php

namespace App\Http\Controllers;

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
    public function interviewNameListDetails($id = null)
    {
        $pre_interview = PreInterview::findOrFail($id);
        $name_lists = NameList::where('pre_interview_id', $id)->get();
        return view('interview_name_list.details', compact('pre_interview', 'name_lists'));
    }
}
