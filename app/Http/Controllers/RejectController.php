<?php

namespace App\Http\Controllers;

use App\Models\NameList;
use Illuminate\Http\Request;

class RejectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $name_lists = NameList::query();
        if (request('search')) {
            $name_lists->where('name', 'Like', '%' . request('search') . '%');
            $name_lists->orWhere('nrc', 'Like', '%' . request('search') . '%');
            $name_lists->orWhere('father_name', 'Like', '%' . request('search') . '%');
            $name_lists->orWhere('mother_name', 'Like', '%' . request('search') . '%');
            $name_lists->orWhere('qualification', 'Like', '%' . request('search') . '%');
            $name_lists->orWhere('native_town', 'Like', '%' . request('search') . '%');
            $name_lists->orWhere('region', 'Like', '%' . request('search') . '%');
            $name_lists->orWhere('expiry_date', 'Like', '%' . request('search') . '%');
            $name_lists->orWhere('phone_number', 'Like', '%' . request('search') . '%');
            $name_lists->orWhere('passport_number', 'Like', '%' . request('search') . '%');
        }
        $name_lists = $name_lists->orderBy('id', 'ASC')->get();
        return view('reject.index', compact('name_lists'));
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
}
