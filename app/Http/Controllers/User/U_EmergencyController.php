<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Validator;
use App\Models\Emergency;
use Illuminate\Support\Facades\DB;

class U_EmergencyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:users');
    }

    public function index()
    {

        // $emergencys = \Auth::user() -> doctors;

        $emergencys = [];
        // dd($emergencys);
        return view('user.emergency.index',
        compact('emergencys'));

    }
}
