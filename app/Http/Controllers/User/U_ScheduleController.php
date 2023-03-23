<?php

namespace App\Http\Controllers\User;

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



        $schedules = Schedule::get();
        // dd($schedules);

        return view('user.schedule.index',
        compact('schedules'));


    }
}
