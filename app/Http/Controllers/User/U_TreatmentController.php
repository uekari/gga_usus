<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Validator;
use App\Models\Treatment;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class U_TreatmentController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:users');
    }


    public function index()
    {

        // $treatments = [];
        $treatments = \Auth::user()-> clients;
        // dd($treatments);
        return view('user.treatment.index',
        compact('treatments'));

    }
}
