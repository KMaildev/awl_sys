<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContract;
use App\Http\Requests\UpdateContract;
use App\Models\Contract;
use App\Models\Demand;
use Illuminate\Http\Request;

class ContractController extends Controller
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
        $contracts = Contract::whereHas('overseas_agencie', function ($q) use ($search) {
            $q->where('lot', 'LIKE', '%' . $search . '%');
            $q->orWhere('employer_name', 'LIKE', '%' . $search . '%');
            $q->orWhere('type_of_company', 'LIKE', '%' . $search . '%');
        })->get();

        return view('contract.index', compact('is_create', 'demands', 'contracts'));
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
    public function store(StoreContract $request)
    {
        $demand_id = $request->demand_id;
        $demand_data = Demand::findOrFail($demand_id);
        $overseas_agencie_id = $demand_data->overseas_agencie_id;

        $contract = new Contract();
        $contract->demand_id = $request->demand_id;
        $contract->overseas_agencie_id = $overseas_agencie_id;
        $contract->lot = $request->lot;
        $contract->contract_date = $request->contract_date;
        $contract->male = $request->male;
        $contract->female = $request->female;
        $contract->remark = $request->remark;
        $contract->user_id = auth()->user()->id;
        $contract->save();
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

        $search = request('search');
        $contracts = Contract::all();

        $contract_edit = Contract::findOrFail($id);
        return view('contract.index', compact('is_create', 'demands', 'contracts', 'contract_edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContract $request, $id)
    {
        $demand_id = $request->demand_id;
        $demand_data = Demand::findOrFail($demand_id);
        $overseas_agencie_id = $demand_data->overseas_agencie_id;

        $contract = Contract::findOrFail($id);
        $contract->demand_id = $request->demand_id;
        $contract->overseas_agencie_id = $overseas_agencie_id;
        $contract->lot = $request->lot;
        $contract->contract_date = $request->contract_date;
        $contract->male = $request->male;
        $contract->female = $request->female;
        $contract->remark = $request->remark;
        $contract->user_id = auth()->user()->id;
        $contract->update();
        return redirect()->route('contract.index')->with('success', 'Your processing has been completed.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contract = Contract::findOrFail($id);
        $contract->delete();
        return redirect()->route('contract.index')->with('success', 'Your processing has been completed.');
    }
}
