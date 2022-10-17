<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePreInterview;
use App\Http\Requests\UpdatePreInterview;
use App\Models\Demand;
use App\Models\EmployerInterview;
use App\Models\Interview;
use Illuminate\Http\Request;

class EmployerInterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demands = Demand::all();
        $is_create = true;

        $search = request('search');
        $pre_interviews = Interview::where('interview_type', 'employer_interview')
            ->whereHas('overseas_agencie', function ($q) use ($search) {
                $q->where('employer_name', 'LIKE', '%' . $search . '%');
                $q->orWhere('type_of_company', 'LIKE', '%' . $search . '%');
            })->get();
        return view('employer_interview.index', compact('demands', 'pre_interviews', 'is_create'));
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
    public function store(StorePreInterview $request)
    {
        $demand_id = $request->demand_id;
        $demand_data = Demand::findOrFail($demand_id);
        $overseas_agencie_id = $demand_data->overseas_agencie_id;

        $pre_interview = new Interview();
        $pre_interview->demand_id = $request->demand_id;
        $pre_interview->overseas_agencie_id = $overseas_agencie_id;
        $pre_interview->interview_title = $request->interview_title;
        $pre_interview->interview_date = $request->interview_date;
        $pre_interview->male = $request->male;
        $pre_interview->female = $request->female;
        $pre_interview->interview_type = $request->interview_type;
        $pre_interview->save();
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
        $demands = Demand::all();
        $is_create = false;

        $search = request('search');
        $pre_interviews = Interview::where('interview_type', 'employer_interview')
            ->whereHas('overseas_agencie', function ($q) use ($search) {
                $q->where('employer_name', 'LIKE', '%' . $search . '%');
                $q->orWhere('type_of_company', 'LIKE', '%' . $search . '%');
            })->get();

        $pre_interview_edit = Interview::findOrFail($id);
        return view('employer_interview.index', compact('demands', 'pre_interviews', 'is_create', 'pre_interview_edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePreInterview $request, $id)
    {
        $demand_id = $request->demand_id;
        $demand_data = Demand::findOrFail($demand_id);
        $overseas_agencie_id = $demand_data->overseas_agencie_id;

        $pre_interview = Interview::findOrFail($id);
        $pre_interview->demand_id = $request->demand_id;
        $pre_interview->overseas_agencie_id = $overseas_agencie_id;
        $pre_interview->interview_title = $request->interview_title;
        $pre_interview->interview_date = $request->interview_date;
        $pre_interview->male = $request->male;
        $pre_interview->female = $request->female;
        $pre_interview->update();
        return redirect()->route('employer_interview.index')->with('success', 'Your processing has been completed.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $passport = Interview::findOrFail($id);
        $passport->delete();
        return redirect()->route('employer_interview.index')->with('success', 'Your processing has been completed.');
    }
}
