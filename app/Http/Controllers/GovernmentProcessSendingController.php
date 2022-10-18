<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeGovernmentProcessSending;
use App\Http\Requests\updateGovernmentProcessSending;
use App\Models\Demand;
use App\Models\GovernmentProcessSending;
use Illuminate\Http\Request;

class GovernmentProcessSendingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $is_create = true;
        $demands = Demand::all();

        $search = request('search');
        $government_process = GovernmentProcessSending::whereHas('overseas_agencie', function ($q) use ($search) {
            $q->where('employer_name', 'LIKE', '%' . $search . '%');
            $q->orWhere('type_of_company', 'LIKE', '%' . $search . '%');
        })->get();

        return view('government_process_sending.index', compact('is_create', 'demands', 'government_process'));
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
    public function store(storeGovernmentProcessSending $request)
    {
        if ($request->hasFile('files')) {
            $files = $request->file('files');
            $file_name = $files->getClientOriginalName();
            $file_path = $files->store('public/files');
        }

        $demand_id = $request->demand_id;
        $demand = Demand::findOrFail($demand_id);
        $overseas_agencie_id = $demand->overseas_agencie_id;

        $gov_process = new GovernmentProcessSending();
        $gov_process->demand_id = $request->demand_id;
        $gov_process->overseas_agencie_id = $overseas_agencie_id;
        $gov_process->thai_date = $request->thai_date;
        $gov_process->cabinet_date = $request->cabinet_date;
        $gov_process->issue_date = $request->issue_date;
        $gov_process->file_name = $file_name ?? '';
        $gov_process->file_path = $file_path ?? '';
        $gov_process->user_id = auth()->user()->id;
        $gov_process->save();
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
        $is_create = false;
        $demands = Demand::all();
        $government_process = GovernmentProcessSending::all();

        $government_process_edit = GovernmentProcessSending::findOrFail($id);
        return view('government_process_sending.index', compact('is_create', 'demands', 'government_process', 'government_process_edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(updateGovernmentProcessSending $request, $id)
    {
        if ($request->hasFile('files')) {
            $files = $request->file('files');
            $file_name = $files->getClientOriginalName();
            $file_path = $files->store('public/files');
        }

        $demand_id = $request->demand_id;
        $demand = Demand::findOrFail($demand_id);
        $overseas_agencie_id = $demand->overseas_agencie_id;

        $gov_process = GovernmentProcessSending::findOrFail($id);
        $gov_process->demand_id = $request->demand_id;
        $gov_process->overseas_agencie_id = $overseas_agencie_id;
        $gov_process->thai_date = $request->thai_date;
        $gov_process->cabinet_date = $request->cabinet_date;
        $gov_process->issue_date = $request->issue_date;
        $gov_process->file_name = $file_name ?? $gov_process->file_name;
        $gov_process->file_path = $file_path ?? $gov_process->file_path;
        $gov_process->user_id = auth()->user()->id;
        $gov_process->update();
        return redirect()->route('government_process_sending.index')->with('success', 'Your processing has been completed.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gov_process = GovernmentProcessSending::findOrFail($id);
        $gov_process->delete();
        return redirect()->route('government_process_sending.index')->with('success', 'Your processing has been completed.');
    }
}
