<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\Interview;
use App\Models\NameList;
use Illuminate\Http\Request;

class ContractNameListController extends Controller
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
        $contract = Contract::findOrFail($id);
        $demand_id = $contract->demand_id;

        $interviews = Interview::where('demand_id', $demand_id)
            ->where('interview_type', 'employer_interview')
            ->get();

        $contract_name_lists = NameList::where('contract_id', $id)
            ->get();

        return view('contract_name_list.show', compact('interviews', 'contract', 'contract_name_lists'));
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
        $contract_id = $id;
        if ($request->nameList) {
            foreach ($request->nameList as $key => $value) {
                $id = $value['name_list_id'];
                $name_list = NameList::findOrFail($id);
                $name_list->contract_id = $contract_id;
                $name_list->contract_submit_date = date("Y-m-d H:i:s");
                $name_list->contract_user_id = auth()->user()->id;
                $name_list->update();
            }
            return redirect()->back()->with('success', 'Your processing has been completed.');
        }
        return redirect()->back()->with('error', 'Error.');
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
}
