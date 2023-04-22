<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Schedule; //Elquentエロクアント
use App\Models\Client;
use App\Models\User;
use App\Models\Treatment;
use App\Models\Destination;
use Illuminate\Support\Facades\DB; //QueryBuilderクエリビルダ

class U_TreatmentController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:users');
    }


    public function index()
    {
        $treatments=Treatment::where('client_id',\Auth::user()->id)->get();
        // dd($treatments);
        return view('user.treatment.index',compact('treatments'));
    }

    public function show($id)
    {
        $treatment = Treatment::find($id);
        return view('user.treatment.show', compact('treatment'));
    }


}
