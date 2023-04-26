<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedule; //Elquentエロクアント
use Illuminate\Support\Facades\Auth;


class U_MapController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:users');
    }


    public function index()
    {
        // どのスケジュールか判別できないので、とりあえず1個選んで表示するようにする。
        $schedule = Schedule::with('destinations')->where('user_id', Auth::user()->id)->first();
        // dd($schedules);

        return view(
            'user.map.index',
            compact('schedule')
        );
    }
}
