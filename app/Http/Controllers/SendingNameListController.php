<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\Interview;
use App\Models\NameList;
use App\Models\Sending;
use Illuminate\Http\Request;

class SendingNameListController extends Controller
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
        $sending = Sending::findOrFail($id);
        $contract_id = $sending->contract_id;
        $demand_id = $sending->demand_id;

        $contracts = Contract::where('demand_id', $demand_id)->get();

        $sending_name_lists = NameList::where('sending_id', $id)->get();
        return view('sending_name_list.show', compact('sending', 'contracts', 'sending_name_lists'));
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
        $sending_id = $id;
        if ($request->nameList) {
            foreach ($request->nameList as $key => $value) {
                $id = $value['name_list_id'];
                $name_list = NameList::findOrFail($id);
                $name_list->sending_id = $sending_id;
                $name_list->sending_submit_date = date("Y-m-d H:i:s");
                $name_list->sending_user_id = auth()->user()->id;
                $name_list->update();
            }
            return redirect()->back()->with('success', 'Your processing has been completed.');
        }
        return redirect()->back()->with('error', 'Something went wrong please try again.');
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
