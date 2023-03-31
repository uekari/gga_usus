<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Validator;
use App\Models\Emergency;
use App\Models\User;
use App\Models\Doctor;
use Illuminate\Support\Facades\DB;

class U_EmergencyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:users');
    }

    public function index()
    {

        // $emergencys = \Auth::user() -> clients;
        // dd($emergencys);
        // return view('user.emergency.index',
        // compact('emergencys'));

        // $schedule = Schedule::with('times')->where('user_id',\Auth::user()->id)->find($id); //ログインしている情報のみ
        // dd($schedule);
        // return view('user.schedule.show', compact('schedule'));

        $emergencys = Client::with('doctor')->get();
        dd($emergencys);
        return view('user.emergency.index',
        compact('emergencys'));

    }
}
