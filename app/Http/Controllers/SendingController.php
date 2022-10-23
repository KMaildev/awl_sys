<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSending;
use App\Http\Requests\UpdateSending;
use App\Models\Contract;
use App\Models\Sending;
use Illuminate\Http\Request;

class SendingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $is_create = true;
        $contracts = Contract::all();

        $search = request('search');
        $sendings = Sending::whereHas('overseas_agencie', function ($q) use ($search) {
            $q->where('employer_name', 'LIKE', '%' . $search . '%');
            $q->orWhere('type_of_company', 'LIKE', '%' . $search . '%');
        })->get();

        return view('sending.index', compact('contracts', 'is_create', 'sendings'));
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
    public function store(StoreSending $request)
    {
        $contract_id = $request->contract_id;
        $demand_data = Contract::findOrFail($contract_id);
        $demand_id = $demand_data->demand_id;
        $overseas_agencie_id = $demand_data->overseas_agencie_id;

        $sending = new Sending();
        $sending->contract_id = $request->contract_id;
        $sending->demand_id = $demand_id;
        $sending->overseas_agencie_id = $overseas_agencie_id;
        $sending->sending_date = $request->sending_date;
        $sending->male = $request->male;
        $sending->female = $request->female;
        $sending->remark = $request->remark;
        $sending->user_id = auth()->user()->id;
        $sending->save();
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

        $contracts = Contract::all();
        $sendings = Sending::all();

        $sending_edit = Sending::findOrFail($id);
        return view('sending.index', compact('contracts', 'is_create', 'sendings', 'sending_edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSending $request, $id)
    {
        $contract_id = $request->contract_id;
        $demand_data = Contract::findOrFail($contract_id);
        $demand_id = $demand_data->demand_id;
        $overseas_agencie_id = $demand_data->overseas_agencie_id;

        $sending = Sending::findOrFail($id);
        $sending->contract_id = $request->contract_id;
        $sending->demand_id = $demand_id;
        $sending->overseas_agencie_id = $overseas_agencie_id;
        $sending->sending_date = $request->sending_date;
        $sending->male = $request->male;
        $sending->female = $request->female;
        $sending->remark = $request->remark;
        $sending->user_id = auth()->user()->id;
        $sending->update();
        return redirect()->route('sending.index')->with('success', 'Your processing has been completed.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sending = Sending::findOrFail($id);
        $sending->delete();
        return redirect()->route('sending.index')->with('success', 'Your processing has been completed.');
    }
}
