<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDemand;
use App\Http\Requests\UpdateDemand;
use App\Models\Demand;
use App\Models\OverseasAgency;
use Illuminate\Http\Request;

class DemandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $overseas_agencies = OverseasAgency::all();
        $is_create = true;

        $search = request('search');
        $demands = Demand::whereHas('overseas_agencie', function ($q) use ($search) {
            $q->where('employer_name', 'LIKE', '%' . $search . '%');
            $q->orWhere('type_of_company', 'LIKE', '%' . $search . '%');
        })->get();
        return view('demand.index', compact('overseas_agencies', 'demands', 'is_create'));
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
    public function store(StoreDemand $request)
    {
        $demand = new Demand();
        $demand->overseas_agencie_id = $request->overseas_agencie_id;
        $demand->demand_date = $request->demand_date;
        $demand->male = $request->male;
        $demand->female = $request->female;
        $demand->save();
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
        $overseas_agencies = OverseasAgency::all();
        $is_create = false;

        $search = request('search');
        $demands = Demand::whereHas('overseas_agencie', function ($q) use ($search) {
            $q->where('employer_name', 'LIKE', '%' . $search . '%');
            $q->orWhere('type_of_company', 'LIKE', '%' . $search . '%');
        })->get();

        $demand_edit = Demand::findOrFail($id);

        return view('demand.index', compact('overseas_agencies', 'demands', 'is_create', 'demand_edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDemand $request, $id)
    {
        $demand = Demand::findOrFail($id);
        $demand->overseas_agencie_id = $request->overseas_agencie_id;
        $demand->demand_date = $request->demand_date;
        $demand->male = $request->male;
        $demand->female = $request->female;
        $demand->update();
        return redirect()->route('demand.index')->with('success', 'Your processing has been completed.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $passport = Demand::findOrFail($id);
        $passport->delete();
        return redirect()->route('demand.index')->with('success', 'Your processing has been completed.');
    }
}
