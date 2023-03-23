<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Schedule; //Elquentエロクアント
use App\Models\Client;
use App\Models\User;
use Illuminate\Support\Facades\DB; //QueryBuilderクエリビルダ

class U_ScheduleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:users');
    }


    public function index()
    {
        $schedules = \Auth::user()->schedules;
        // dd($schedules);

        return view('user.schedule.index',
        compact('schedules'));


    }


    public function show($id)
    {
        $schedule = Schedule::with('times')->where('user_id',\Auth::user()->id)->find($id); //ログインしている情報のみ
        // dd($schedule);
        return view('user.schedule.show', compact('schedule'));
    }


}
