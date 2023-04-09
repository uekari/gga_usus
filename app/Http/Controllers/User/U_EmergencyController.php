<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Validator;
use App\Models\Emergency;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Caremanager;
use App\Models\Schedule;
use App\Models\Emergencyhospital;
use Illuminate\Support\Facades\DB;

class U_EmergencyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:users');
    }

    public function index()
    {

        $doctors = Doctor::where('id',\Auth::user()->id)->get();
        $caremanagers = Caremanager::where('id',\Auth::user()->id)->get();
        $hospitals=Emergencyhospital::where('schedule_id',\Auth::user()->id)->get();

        return view('user.emergency.index',
        compact('doctors','caremanagers','hospitals'));

    }
}
