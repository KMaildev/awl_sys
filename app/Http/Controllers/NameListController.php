<?php

namespace App\Http\Controllers;

use App\Models\NameList;
use Illuminate\Http\Request;

class NameListController extends Controller
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


    public function updateRemark(Request $request)
    {
        $id = $request->id;
        $value = $request->value;

        $temp = NameList::findOrFail($id);
        $temp->remark = $value;
        $temp->update();
        return json_encode(array(
            "statusCode" => 200,
        ));
    }


    public function updateNote(Request $request)
    {
        $id = $request->id;
        $value = $request->value;

        $temp = NameList::findOrFail($id);
        $temp->note = $value;
        $temp->update();
        return json_encode(array(
            "statusCode" => 200,
        ));
    }

    public function updateFailCancel(Request $request)
    {
        $id = $request->id;
        $value = $request->value;

        $temp = NameList::findOrFail($id);
        $temp->fail_cancel = $value;
        $temp->update();
        return json_encode(array(
            "statusCode" => 200,
        ));
    }


    public function updateMedicalFail(Request $request)
    {
        $id = $request->id;
        $value = $request->value;

        $temp = NameList::findOrFail($id);
        $temp->medical_fail = $value;
        $temp->update();
        return json_encode(array(
            "statusCode" => 200,
        ));
    }
}
