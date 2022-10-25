<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\Demand;
use App\Models\Interview;
use App\Models\NameList;
use App\Models\Sending;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_demand = Demand::count();
        $total_interview = Interview::count();
        $total_contract = Contract::count();
        $total_sending = Sending::count();

        $pre_failed = NameList::where('fail_cancel', '!=', '')
            ->where('interview_type', 'pre_interview')
            ->count();

        $thai_failed = NameList::where('medical_fail', '!=', '')
            ->where('interview_type', 'employer_interview')
            ->count();

        $total_reject = NameList::where('remark', '!=', '')->count();

        $users = User::all();
        return view('home', compact('total_demand', 'total_interview', 'total_contract', 'total_sending', 'total_reject', 'pre_failed', 'thai_failed', 'users'));
    }
}
